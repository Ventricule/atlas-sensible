(function($) {

  var Relation = function(element) {

    var self = this;

    // basic elements and stuff
    this.relation 	 = $(element);
    this.field       = self.relation.parent().parent();
    this.list        = self.relation.next();
    this.checkboxes  = self.list.find('input[type="checkbox"]');
    this.search      = self.list.find('.relationbox-search');
    this.canSearch   = self.relation.data('search');
    this.space       = self.relation.find('.placeholder');
    this.label       = self.field.find('.label');
    this.elements    = [];
    this.readonly    = self.relation.data('readonly');
    this.modal       = self.field.parents('.modal-content');

    // add element
    this.add = function(item) {
			item.parent().parent().prependTo(item.parent().parent().parent());
      var element  = {
        order:  item.parent().parent().index(),
        name:   item.val(),
        value:  item.parent().children('span').last().text()
       };
      self.elements.push(element);
      
			// update relation to the checked element
      var to = item.closest('.input-list').attr('data-uri');
			$.ajax({
				method: "GET",
				url: "/api/" + item.val(),
				data: { action: "link", option: "add", to: to }
			})
			.done(function( msg ) {
			});
			
      var html     = '<span class="item" title="' + element.name + '">' + element.value + '</span>';
      self.relation.prepend(html);
    };

    // remove element
    this.remove = function(item) {
      var key = item.val();
      self.elements = $.grep(self.elements, function(v) {
        return v.name != key;
      });
      self.relation.find('span[title="' + key + '"]').remove();
			item.parent().parent().insertAfter(self.list.find('input[type="checkbox"]').filter(':checked').last().parent().parent());
			
			// update relation to the checked element
      var to = item.closest('.input-list').attr('data-uri');
			$.ajax({
				method: "GET",
				url: "/api/" + item.val(),
				data: { action: "link", option: "remove", to: to }
			})
				.done(function( msg ) {
				});
			
    }

    // sort elements, returns order of element if provided
    this.sort = function(element) {
      self.elements.sort(function(a, b) {
          return a.order - b.order;
      });

      if(element !== undefined) {
        var index = $.map(self.elements, function(e, i) {
          if(e.name == element.name) return i;
        })
        return index[0];
      }
    };

    // shows/hides placeholder
    this.placeholder = function () {
      if(self.elements.length > 0) {
        self.space.hide();
      } else {
        self.space.show();
      }
    };

    // prepopulate with elements
    this.prepopulate = function() {
			self.list.find('ul').css("visibility","hidden");
			var thisUri = self.list.attr('data-uri');
			var related = '';
			$.ajax({
				method: "GET",
				url: "/api/" + thisUri,
				data: { action: "getField", field: "relation" }
			}).done(function( response ) {
				related = response[0].replace(/ /g, "").split(',');
				for (i=related.length; i>=0; i--) {
					var selected = self.checkboxes.filter('[value="' + related[i] + '"]').parent().parent();
					selected.prependTo(self.list.find('ul'));
				}
				self.list.find('ul').css("visibility","visible");
			});
			
      self.checkboxes.filter(':checked').each(function() {
        self.add($(this));
      });
    };

    // bindings for select list
    this.initSelect = function() {
      self.relation.add(self.label).on('click', function () {
        self.list.toggle();
        self.relation.toggleClass('input-is-focused');
        self.search.focus();
        self.modalize();
      });
			self.list.find('ul').addClass('sortable').sortable({
				update: function(event, ui) {
					self.elements = new Array();
					self.list.find('input[type="checkbox"]').filter(':checked').each(function() {
						var element  = {
							order:  $(this).parent().parent().index(),
							name:   $(this).val(),
							value:  $(this).parent().text()
						};
						self.elements.push(element);
					});
				}
			});

      var container = self.modal.length > 0 ? $('.modal-content') : $(document);
      container.bind('click', function (e) {
        if(self.relation.hasClass('input-is-focused') && !self.field.has($(e.target)).length) {
          self.hide();
        }
      });
      container.on('keydown', function(e) {
        if(self.relation.hasClass('input-is-focused') && e.which == 9) {
          self.hide();
        }
      });
    };

    this.initSearch = function() {
      self.search.on('input', function() {
        var search   = $(this).val();
        var list     = self.list.find('ul');
        var elements = list.children();
        var regex    = new RegExp("(" + search + ")", "ig");

        elements
        .css({'display':'block'})
        .each(function() {
            var text = $(this).find('span');
            var bold  = text.text().replace(regex, "<b>$1</b>");
            text.html(bold);
          })
          .filter(function(index) {
            return ($(this).find('span').text().match(regex) == null);
          })
          .css({'display':'none'});
      });

      self.field.on('keydown', function(e) {
        if(e.keyCoce == 27 || e.which == 27) {
          self.search.val("");
          self.list.find('ul').children()
          .css({'display':'block'})
          .each(function () {
            $(this).find('span').html($(this).find('span').text());
          });
        }
      });


    }

    this.hide = function() {
      self.list.hide();
      self.relation.removeClass('input-is-focused');
      self.modalize('remove');
    };

    // bindings for checkboxes
    this.onChecking = function() {
      self.checkboxes.on('change', function () {
        var checkbox = $(this);
        if (checkbox.is(':checked')) {
          self.add(checkbox);
        } else {
          self.remove(checkbox);
        }
        self.placeholder();
      });
    };

    // fixing display in structure field modal
    this.modalize = function(mode) {
      var view  = $(window).height() + $(window).scrollTop();
      if(self.modal.length > 0) {
        var modal = self.modal.offset().top + self.modal.height();
        if(view > modal) {
          if(mode == 'remove') self.modal.removeClass('overflowing');
          else self.modal.toggleClass('overflowing');
        }
      }
    };

    // init
    this.init = function () {
      self.prepopulate();
      self.placeholder();

      if(!self.readonly) {
        self.initSelect();
        self.onChecking();
      }

      if(self.canSearch == 1) {
        self.initSearch();
      }

    };

    // start the plugin
    return this.init();

  };

  // jquery helper for the relation plugin
  $.fn.relation = function() {

    return this.each(function() {

      if($(this).data('relation')) {
        return $(this).data('relation');
      } else {
        var relation = new Relation(this);
        $(this).data('relation', relation);
        return relation;
      }

    });

  };

})(jQuery);
