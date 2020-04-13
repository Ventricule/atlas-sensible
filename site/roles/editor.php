<?php
// site/roles/editor.php
return [
  'name'        => 'Éditeur',
  'default'     => false,
  'permissions' => [
    '*'                 => true,
    'panel.access.options' => false,
    'panel.page.*'      => false,
    'panel.page.read'   => function(){

      $authorizedpage = in_array( $this->target()->page()->intendedTemplate(), ['points', 'lignes', 'lieux'] );

      if ( $authorizedpage || $this->user()->username() == $this->target()->page()->author() ) {
        return true;
      } else {
        return false;
      }

    },
    'panel.page.create' => true,
    'panel.page.delete' => function(){

      $authorizedpage = in_array( $this->target()->page()->intendedTemplate(), ['point', 'ligne', 'lieu'] );

      if ( $authorizedpage && $this->user()->username() == $this->target()->page()->author() ) {
        return true;
      } else {
        return false;
      }

    },
    'panel.page.update' => function(){

      $authorizedpage = in_array( $this->target()->page()->intendedTemplate(), ['point', 'ligne', 'lieu'] );

      if ( $authorizedpage && $this->user()->username() == $this->target()->page()->author() ) {
        if($this->state() === 'ui') {
          // keep the form active
          return true;
        }
        if ($this->target()->data()['author'] !== $this->user()->username()) {
          return "Vous n'êtes pas autorisé à changer l'auteur de cet article";
        }
        return true;
      } else {
        return false;
      }

    },
    'panel.avatar.*'    => true,
    'panel.user.*'      => false,
    'panel.user.read'   => function() {;

      if($this->user()->is($this->target()->user())) {
        // users are allowed to edit their own information
        return true;
      } else {
        // other users can't be edited
        return false;
      }

    },
    'panel.user.update' => function() {;

      if($this->user()->is($this->target()->user())) {
        // users are allowed to edit their own information
        return true;
      } else {
        // other users can't be edited
        return false;
      }

    }
  ]
];