<?php

class IconlistField extends BaseField {

  static public $assets = array(
    'css' => array(
      'iconlist.css'
    )
  );

  public function result() {
    return null;
  }

  public function label() {
    return null;
  }

  public function content() {
		return '<div id="icons" class="container">
      <div class="row">
        <div title="Code: 0xe800" class="the-icons span3"><i class="demo-icon icontypo-note">&#xe800;</i> <span class="i-name">note</span><span class="i-code">0xe800</span></div>
        <div title="Code: 0xe801" class="the-icons span3"><i class="demo-icon icontypo-note-beamed">&#xe801;</i> <span class="i-name">note-beamed</span><span class="i-code">0xe801</span></div>
        <div title="Code: 0xe802" class="the-icons span3"><i class="demo-icon icontypo-music">&#xe802;</i> <span class="i-name">music</span><span class="i-code">0xe802</span></div>
        <div title="Code: 0xe803" class="the-icons span3"><i class="demo-icon icontypo-search">&#xe803;</i> <span class="i-name">search</span><span class="i-code">0xe803</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe804" class="the-icons span3"><i class="demo-icon icontypo-flashlight">&#xe804;</i> <span class="i-name">flashlight</span><span class="i-code">0xe804</span></div>
        <div title="Code: 0xe805" class="the-icons span3"><i class="demo-icon icontypo-mail">&#xe805;</i> <span class="i-name">mail</span><span class="i-code">0xe805</span></div>
        <div title="Code: 0xe806" class="the-icons span3"><i class="demo-icon icontypo-heart">&#xe806;</i> <span class="i-name">heart</span><span class="i-code">0xe806</span></div>
        <div title="Code: 0xe807" class="the-icons span3"><i class="demo-icon icontypo-heart-empty">&#xe807;</i> <span class="i-name">heart-empty</span><span class="i-code">0xe807</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe808" class="the-icons span3"><i class="demo-icon icontypo-star">&#xe808;</i> <span class="i-name">star</span><span class="i-code">0xe808</span></div>
        <div title="Code: 0xe809" class="the-icons span3"><i class="demo-icon icontypo-star-empty">&#xe809;</i> <span class="i-name">star-empty</span><span class="i-code">0xe809</span></div>
        <div title="Code: 0xe80a" class="the-icons span3"><i class="demo-icon icontypo-user">&#xe80a;</i> <span class="i-name">user</span><span class="i-code">0xe80a</span></div>
        <div title="Code: 0xe80b" class="the-icons span3"><i class="demo-icon icontypo-users">&#xe80b;</i> <span class="i-name">users</span><span class="i-code">0xe80b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe80c" class="the-icons span3"><i class="demo-icon icontypo-user-add">&#xe80c;</i> <span class="i-name">user-add</span><span class="i-code">0xe80c</span></div>
        <div title="Code: 0xe80d" class="the-icons span3"><i class="demo-icon icontypo-video">&#xe80d;</i> <span class="i-name">video</span><span class="i-code">0xe80d</span></div>
        <div title="Code: 0xe80e" class="the-icons span3"><i class="demo-icon icontypo-picture">&#xe80e;</i> <span class="i-name">picture</span><span class="i-code">0xe80e</span></div>
        <div title="Code: 0xe80f" class="the-icons span3"><i class="demo-icon icontypo-camera">&#xe80f;</i> <span class="i-name">camera</span><span class="i-code">0xe80f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe810" class="the-icons span3"><i class="demo-icon icontypo-layout">&#xe810;</i> <span class="i-name">layout</span><span class="i-code">0xe810</span></div>
        <div title="Code: 0xe811" class="the-icons span3"><i class="demo-icon icontypo-menu">&#xe811;</i> <span class="i-name">menu</span><span class="i-code">0xe811</span></div>
        <div title="Code: 0xe812" class="the-icons span3"><i class="demo-icon icontypo-check">&#xe812;</i> <span class="i-name">check</span><span class="i-code">0xe812</span></div>
        <div title="Code: 0xe813" class="the-icons span3"><i class="demo-icon icontypo-cancel">&#xe813;</i> <span class="i-name">cancel</span><span class="i-code">0xe813</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe814" class="the-icons span3"><i class="demo-icon icontypo-cancel-circled">&#xe814;</i> <span class="i-name">cancel-circled</span><span class="i-code">0xe814</span></div>
        <div title="Code: 0xe815" class="the-icons span3"><i class="demo-icon icontypo-cancel-squared">&#xe815;</i> <span class="i-name">cancel-squared</span><span class="i-code">0xe815</span></div>
        <div title="Code: 0xe816" class="the-icons span3"><i class="demo-icon icontypo-plus">&#xe816;</i> <span class="i-name">plus</span><span class="i-code">0xe816</span></div>
        <div title="Code: 0xe817" class="the-icons span3"><i class="demo-icon icontypo-plus-circled">&#xe817;</i> <span class="i-name">plus-circled</span><span class="i-code">0xe817</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe818" class="the-icons span3"><i class="demo-icon icontypo-plus-squared">&#xe818;</i> <span class="i-name">plus-squared</span><span class="i-code">0xe818</span></div>
        <div title="Code: 0xe819" class="the-icons span3"><i class="demo-icon icontypo-minus">&#xe819;</i> <span class="i-name">minus</span><span class="i-code">0xe819</span></div>
        <div title="Code: 0xe81a" class="the-icons span3"><i class="demo-icon icontypo-minus-circled">&#xe81a;</i> <span class="i-name">minus-circled</span><span class="i-code">0xe81a</span></div>
        <div title="Code: 0xe81b" class="the-icons span3"><i class="demo-icon icontypo-minus-squared">&#xe81b;</i> <span class="i-name">minus-squared</span><span class="i-code">0xe81b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe81c" class="the-icons span3"><i class="demo-icon icontypo-help">&#xe81c;</i> <span class="i-name">help</span><span class="i-code">0xe81c</span></div>
        <div title="Code: 0xe81d" class="the-icons span3"><i class="demo-icon icontypo-help-circled">&#xe81d;</i> <span class="i-name">help-circled</span><span class="i-code">0xe81d</span></div>
        <div title="Code: 0xe81e" class="the-icons span3"><i class="demo-icon icontypo-info">&#xe81e;</i> <span class="i-name">info</span><span class="i-code">0xe81e</span></div>
        <div title="Code: 0xe81f" class="the-icons span3"><i class="demo-icon icontypo-info-circled">&#xe81f;</i> <span class="i-name">info-circled</span><span class="i-code">0xe81f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe820" class="the-icons span3"><i class="demo-icon icontypo-back">&#xe820;</i> <span class="i-name">back</span><span class="i-code">0xe820</span></div>
        <div title="Code: 0xe821" class="the-icons span3"><i class="demo-icon icontypo-home">&#xe821;</i> <span class="i-name">home</span><span class="i-code">0xe821</span></div>
        <div title="Code: 0xe822" class="the-icons span3"><i class="demo-icon icontypo-link">&#xe822;</i> <span class="i-name">link</span><span class="i-code">0xe822</span></div>
        <div title="Code: 0xe823" class="the-icons span3"><i class="demo-icon icontypo-attach">&#xe823;</i> <span class="i-name">attach</span><span class="i-code">0xe823</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe824" class="the-icons span3"><i class="demo-icon icontypo-lock">&#xe824;</i> <span class="i-name">lock</span><span class="i-code">0xe824</span></div>
        <div title="Code: 0xe825" class="the-icons span3"><i class="demo-icon icontypo-lock-open">&#xe825;</i> <span class="i-name">lock-open</span><span class="i-code">0xe825</span></div>
        <div title="Code: 0xe826" class="the-icons span3"><i class="demo-icon icontypo-eye">&#xe826;</i> <span class="i-name">eye</span><span class="i-code">0xe826</span></div>
        <div title="Code: 0xe827" class="the-icons span3"><i class="demo-icon icontypo-tag">&#xe827;</i> <span class="i-name">tag</span><span class="i-code">0xe827</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe828" class="the-icons span3"><i class="demo-icon icontypo-bookmark">&#xe828;</i> <span class="i-name">bookmark</span><span class="i-code">0xe828</span></div>
        <div title="Code: 0xe829" class="the-icons span3"><i class="demo-icon icontypo-bookmarks">&#xe829;</i> <span class="i-name">bookmarks</span><span class="i-code">0xe829</span></div>
        <div title="Code: 0xe82a" class="the-icons span3"><i class="demo-icon icontypo-flag">&#xe82a;</i> <span class="i-name">flag</span><span class="i-code">0xe82a</span></div>
        <div title="Code: 0xe82b" class="the-icons span3"><i class="demo-icon icontypo-thumbs-up">&#xe82b;</i> <span class="i-name">thumbs-up</span><span class="i-code">0xe82b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe82c" class="the-icons span3"><i class="demo-icon icontypo-thumbs-down">&#xe82c;</i> <span class="i-name">thumbs-down</span><span class="i-code">0xe82c</span></div>
        <div title="Code: 0xe82d" class="the-icons span3"><i class="demo-icon icontypo-download">&#xe82d;</i> <span class="i-name">download</span><span class="i-code">0xe82d</span></div>
        <div title="Code: 0xe82e" class="the-icons span3"><i class="demo-icon icontypo-upload">&#xe82e;</i> <span class="i-name">upload</span><span class="i-code">0xe82e</span></div>
        <div title="Code: 0xe82f" class="the-icons span3"><i class="demo-icon icontypo-upload-cloud">&#xe82f;</i> <span class="i-name">upload-cloud</span><span class="i-code">0xe82f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe830" class="the-icons span3"><i class="demo-icon icontypo-reply">&#xe830;</i> <span class="i-name">reply</span><span class="i-code">0xe830</span></div>
        <div title="Code: 0xe831" class="the-icons span3"><i class="demo-icon icontypo-reply-all">&#xe831;</i> <span class="i-name">reply-all</span><span class="i-code">0xe831</span></div>
        <div title="Code: 0xe832" class="the-icons span3"><i class="demo-icon icontypo-forward">&#xe832;</i> <span class="i-name">forward</span><span class="i-code">0xe832</span></div>
        <div title="Code: 0xe833" class="the-icons span3"><i class="demo-icon icontypo-quote">&#xe833;</i> <span class="i-name">quote</span><span class="i-code">0xe833</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe834" class="the-icons span3"><i class="demo-icon icontypo-code">&#xe834;</i> <span class="i-name">code</span><span class="i-code">0xe834</span></div>
        <div title="Code: 0xe835" class="the-icons span3"><i class="demo-icon icontypo-export">&#xe835;</i> <span class="i-name">export</span><span class="i-code">0xe835</span></div>
        <div title="Code: 0xe836" class="the-icons span3"><i class="demo-icon icontypo-pencil">&#xe836;</i> <span class="i-name">pencil</span><span class="i-code">0xe836</span></div>
        <div title="Code: 0xe837" class="the-icons span3"><i class="demo-icon icontypo-feather">&#xe837;</i> <span class="i-name">feather</span><span class="i-code">0xe837</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe838" class="the-icons span3"><i class="demo-icon icontypo-print">&#xe838;</i> <span class="i-name">print</span><span class="i-code">0xe838</span></div>
        <div title="Code: 0xe839" class="the-icons span3"><i class="demo-icon icontypo-retweet">&#xe839;</i> <span class="i-name">retweet</span><span class="i-code">0xe839</span></div>
        <div title="Code: 0xe83a" class="the-icons span3"><i class="demo-icon icontypo-keyboard">&#xe83a;</i> <span class="i-name">keyboard</span><span class="i-code">0xe83a</span></div>
        <div title="Code: 0xe83b" class="the-icons span3"><i class="demo-icon icontypo-comment">&#xe83b;</i> <span class="i-name">comment</span><span class="i-code">0xe83b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe83c" class="the-icons span3"><i class="demo-icon icontypo-chat">&#xe83c;</i> <span class="i-name">chat</span><span class="i-code">0xe83c</span></div>
        <div title="Code: 0xe83d" class="the-icons span3"><i class="demo-icon icontypo-bell">&#xe83d;</i> <span class="i-name">bell</span><span class="i-code">0xe83d</span></div>
        <div title="Code: 0xe83e" class="the-icons span3"><i class="demo-icon icontypo-attention">&#xe83e;</i> <span class="i-name">attention</span><span class="i-code">0xe83e</span></div>
        <div title="Code: 0xe83f" class="the-icons span3"><i class="demo-icon icontypo-alert">&#xe83f;</i> <span class="i-name">alert</span><span class="i-code">0xe83f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe840" class="the-icons span3"><i class="demo-icon icontypo-vcard">&#xe840;</i> <span class="i-name">vcard</span><span class="i-code">0xe840</span></div>
        <div title="Code: 0xe841" class="the-icons span3"><i class="demo-icon icontypo-address">&#xe841;</i> <span class="i-name">address</span><span class="i-code">0xe841</span></div>
        <div title="Code: 0xe842" class="the-icons span3"><i class="demo-icon icontypo-location">&#xe842;</i> <span class="i-name">location</span><span class="i-code">0xe842</span></div>
        <div title="Code: 0xe843" class="the-icons span3"><i class="demo-icon icontypo-map">&#xe843;</i> <span class="i-name">map</span><span class="i-code">0xe843</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe844" class="the-icons span3"><i class="demo-icon icontypo-direction">&#xe844;</i> <span class="i-name">direction</span><span class="i-code">0xe844</span></div>
        <div title="Code: 0xe845" class="the-icons span3"><i class="demo-icon icontypo-compass">&#xe845;</i> <span class="i-name">compass</span><span class="i-code">0xe845</span></div>
        <div title="Code: 0xe846" class="the-icons span3"><i class="demo-icon icontypo-cup">&#xe846;</i> <span class="i-name">cup</span><span class="i-code">0xe846</span></div>
        <div title="Code: 0xe847" class="the-icons span3"><i class="demo-icon icontypo-trash">&#xe847;</i> <span class="i-name">trash</span><span class="i-code">0xe847</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe848" class="the-icons span3"><i class="demo-icon icontypo-doc">&#xe848;</i> <span class="i-name">doc</span><span class="i-code">0xe848</span></div>
        <div title="Code: 0xe849" class="the-icons span3"><i class="demo-icon icontypo-docs">&#xe849;</i> <span class="i-name">docs</span><span class="i-code">0xe849</span></div>
        <div title="Code: 0xe84a" class="the-icons span3"><i class="demo-icon icontypo-doc-landscape">&#xe84a;</i> <span class="i-name">doc-landscape</span><span class="i-code">0xe84a</span></div>
        <div title="Code: 0xe84b" class="the-icons span3"><i class="demo-icon icontypo-doc-text">&#xe84b;</i> <span class="i-name">doc-text</span><span class="i-code">0xe84b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe84c" class="the-icons span3"><i class="demo-icon icontypo-doc-text-inv">&#xe84c;</i> <span class="i-name">doc-text-inv</span><span class="i-code">0xe84c</span></div>
        <div title="Code: 0xe84d" class="the-icons span3"><i class="demo-icon icontypo-newspaper">&#xe84d;</i> <span class="i-name">newspaper</span><span class="i-code">0xe84d</span></div>
        <div title="Code: 0xe84e" class="the-icons span3"><i class="demo-icon icontypo-book-open">&#xe84e;</i> <span class="i-name">book-open</span><span class="i-code">0xe84e</span></div>
        <div title="Code: 0xe84f" class="the-icons span3"><i class="demo-icon icontypo-book">&#xe84f;</i> <span class="i-name">book</span><span class="i-code">0xe84f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe850" class="the-icons span3"><i class="demo-icon icontypo-folder">&#xe850;</i> <span class="i-name">folder</span><span class="i-code">0xe850</span></div>
        <div title="Code: 0xe851" class="the-icons span3"><i class="demo-icon icontypo-archive">&#xe851;</i> <span class="i-name">archive</span><span class="i-code">0xe851</span></div>
        <div title="Code: 0xe852" class="the-icons span3"><i class="demo-icon icontypo-box">&#xe852;</i> <span class="i-name">box</span><span class="i-code">0xe852</span></div>
        <div title="Code: 0xe853" class="the-icons span3"><i class="demo-icon icontypo-rss">&#xe853;</i> <span class="i-name">rss</span><span class="i-code">0xe853</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe854" class="the-icons span3"><i class="demo-icon icontypo-phone">&#xe854;</i> <span class="i-name">phone</span><span class="i-code">0xe854</span></div>
        <div title="Code: 0xe855" class="the-icons span3"><i class="demo-icon icontypo-cog">&#xe855;</i> <span class="i-name">cog</span><span class="i-code">0xe855</span></div>
        <div title="Code: 0xe856" class="the-icons span3"><i class="demo-icon icontypo-tools">&#xe856;</i> <span class="i-name">tools</span><span class="i-code">0xe856</span></div>
        <div title="Code: 0xe857" class="the-icons span3"><i class="demo-icon icontypo-share">&#xe857;</i> <span class="i-name">share</span><span class="i-code">0xe857</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe858" class="the-icons span3"><i class="demo-icon icontypo-shareable">&#xe858;</i> <span class="i-name">shareable</span><span class="i-code">0xe858</span></div>
        <div title="Code: 0xe859" class="the-icons span3"><i class="demo-icon icontypo-basket">&#xe859;</i> <span class="i-name">basket</span><span class="i-code">0xe859</span></div>
        <div title="Code: 0xe85a" class="the-icons span3"><i class="demo-icon icontypo-bag">&#xe85a;</i> <span class="i-name">bag</span><span class="i-code">0xe85a</span></div>
        <div title="Code: 0xe85b" class="the-icons span3"><i class="demo-icon icontypo-calendar">&#xe85b;</i> <span class="i-name">calendar</span><span class="i-code">0xe85b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe85c" class="the-icons span3"><i class="demo-icon icontypo-login">&#xe85c;</i> <span class="i-name">login</span><span class="i-code">0xe85c</span></div>
        <div title="Code: 0xe85d" class="the-icons span3"><i class="demo-icon icontypo-logout">&#xe85d;</i> <span class="i-name">logout</span><span class="i-code">0xe85d</span></div>
        <div title="Code: 0xe85e" class="the-icons span3"><i class="demo-icon icontypo-mic">&#xe85e;</i> <span class="i-name">mic</span><span class="i-code">0xe85e</span></div>
        <div title="Code: 0xe85f" class="the-icons span3"><i class="demo-icon icontypo-mute">&#xe85f;</i> <span class="i-name">mute</span><span class="i-code">0xe85f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe860" class="the-icons span3"><i class="demo-icon icontypo-sound">&#xe860;</i> <span class="i-name">sound</span><span class="i-code">0xe860</span></div>
        <div title="Code: 0xe861" class="the-icons span3"><i class="demo-icon icontypo-volume">&#xe861;</i> <span class="i-name">volume</span><span class="i-code">0xe861</span></div>
        <div title="Code: 0xe862" class="the-icons span3"><i class="demo-icon icontypo-clock">&#xe862;</i> <span class="i-name">clock</span><span class="i-code">0xe862</span></div>
        <div title="Code: 0xe863" class="the-icons span3"><i class="demo-icon icontypo-hourglass">&#xe863;</i> <span class="i-name">hourglass</span><span class="i-code">0xe863</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe864" class="the-icons span3"><i class="demo-icon icontypo-lamp">&#xe864;</i> <span class="i-name">lamp</span><span class="i-code">0xe864</span></div>
        <div title="Code: 0xe865" class="the-icons span3"><i class="demo-icon icontypo-light-down">&#xe865;</i> <span class="i-name">light-down</span><span class="i-code">0xe865</span></div>
        <div title="Code: 0xe866" class="the-icons span3"><i class="demo-icon icontypo-light-up">&#xe866;</i> <span class="i-name">light-up</span><span class="i-code">0xe866</span></div>
        <div title="Code: 0xe867" class="the-icons span3"><i class="demo-icon icontypo-adjust">&#xe867;</i> <span class="i-name">adjust</span><span class="i-code">0xe867</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe868" class="the-icons span3"><i class="demo-icon icontypo-block">&#xe868;</i> <span class="i-name">block</span><span class="i-code">0xe868</span></div>
        <div title="Code: 0xe869" class="the-icons span3"><i class="demo-icon icontypo-resize-full">&#xe869;</i> <span class="i-name">resize-full</span><span class="i-code">0xe869</span></div>
        <div title="Code: 0xe86a" class="the-icons span3"><i class="demo-icon icontypo-resize-small">&#xe86a;</i> <span class="i-name">resize-small</span><span class="i-code">0xe86a</span></div>
        <div title="Code: 0xe86b" class="the-icons span3"><i class="demo-icon icontypo-popup">&#xe86b;</i> <span class="i-name">popup</span><span class="i-code">0xe86b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe86c" class="the-icons span3"><i class="demo-icon icontypo-publish">&#xe86c;</i> <span class="i-name">publish</span><span class="i-code">0xe86c</span></div>
        <div title="Code: 0xe86d" class="the-icons span3"><i class="demo-icon icontypo-window">&#xe86d;</i> <span class="i-name">window</span><span class="i-code">0xe86d</span></div>
        <div title="Code: 0xe86e" class="the-icons span3"><i class="demo-icon icontypo-arrow-combo">&#xe86e;</i> <span class="i-name">arrow-combo</span><span class="i-code">0xe86e</span></div>
        <div title="Code: 0xe86f" class="the-icons span3"><i class="demo-icon icontypo-down-circled">&#xe86f;</i> <span class="i-name">down-circled</span><span class="i-code">0xe86f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe870" class="the-icons span3"><i class="demo-icon icontypo-left-circled">&#xe870;</i> <span class="i-name">left-circled</span><span class="i-code">0xe870</span></div>
        <div title="Code: 0xe871" class="the-icons span3"><i class="demo-icon icontypo-right-circled">&#xe871;</i> <span class="i-name">right-circled</span><span class="i-code">0xe871</span></div>
        <div title="Code: 0xe872" class="the-icons span3"><i class="demo-icon icontypo-up-circled">&#xe872;</i> <span class="i-name">up-circled</span><span class="i-code">0xe872</span></div>
        <div title="Code: 0xe873" class="the-icons span3"><i class="demo-icon icontypo-down-open">&#xe873;</i> <span class="i-name">down-open</span><span class="i-code">0xe873</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe874" class="the-icons span3"><i class="demo-icon icontypo-left-open">&#xe874;</i> <span class="i-name">left-open</span><span class="i-code">0xe874</span></div>
        <div title="Code: 0xe875" class="the-icons span3"><i class="demo-icon icontypo-right-open">&#xe875;</i> <span class="i-name">right-open</span><span class="i-code">0xe875</span></div>
        <div title="Code: 0xe876" class="the-icons span3"><i class="demo-icon icontypo-up-open">&#xe876;</i> <span class="i-name">up-open</span><span class="i-code">0xe876</span></div>
        <div title="Code: 0xe877" class="the-icons span3"><i class="demo-icon icontypo-down-open-mini">&#xe877;</i> <span class="i-name">down-open-mini</span><span class="i-code">0xe877</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe878" class="the-icons span3"><i class="demo-icon icontypo-left-open-mini">&#xe878;</i> <span class="i-name">left-open-mini</span><span class="i-code">0xe878</span></div>
        <div title="Code: 0xe879" class="the-icons span3"><i class="demo-icon icontypo-right-open-mini">&#xe879;</i> <span class="i-name">right-open-mini</span><span class="i-code">0xe879</span></div>
        <div title="Code: 0xe87a" class="the-icons span3"><i class="demo-icon icontypo-up-open-mini">&#xe87a;</i> <span class="i-name">up-open-mini</span><span class="i-code">0xe87a</span></div>
        <div title="Code: 0xe87b" class="the-icons span3"><i class="demo-icon icontypo-down-open-big">&#xe87b;</i> <span class="i-name">down-open-big</span><span class="i-code">0xe87b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe87c" class="the-icons span3"><i class="demo-icon icontypo-left-open-big">&#xe87c;</i> <span class="i-name">left-open-big</span><span class="i-code">0xe87c</span></div>
        <div title="Code: 0xe87d" class="the-icons span3"><i class="demo-icon icontypo-right-open-big">&#xe87d;</i> <span class="i-name">right-open-big</span><span class="i-code">0xe87d</span></div>
        <div title="Code: 0xe87e" class="the-icons span3"><i class="demo-icon icontypo-up-open-big">&#xe87e;</i> <span class="i-name">up-open-big</span><span class="i-code">0xe87e</span></div>
        <div title="Code: 0xe87f" class="the-icons span3"><i class="demo-icon icontypo-down">&#xe87f;</i> <span class="i-name">down</span><span class="i-code">0xe87f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe880" class="the-icons span3"><i class="demo-icon icontypo-left">&#xe880;</i> <span class="i-name">left</span><span class="i-code">0xe880</span></div>
        <div title="Code: 0xe881" class="the-icons span3"><i class="demo-icon icontypo-right">&#xe881;</i> <span class="i-name">right</span><span class="i-code">0xe881</span></div>
        <div title="Code: 0xe882" class="the-icons span3"><i class="demo-icon icontypo-up">&#xe882;</i> <span class="i-name">up</span><span class="i-code">0xe882</span></div>
        <div title="Code: 0xe883" class="the-icons span3"><i class="demo-icon icontypo-down-dir">&#xe883;</i> <span class="i-name">down-dir</span><span class="i-code">0xe883</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe884" class="the-icons span3"><i class="demo-icon icontypo-left-dir">&#xe884;</i> <span class="i-name">left-dir</span><span class="i-code">0xe884</span></div>
        <div title="Code: 0xe885" class="the-icons span3"><i class="demo-icon icontypo-right-dir">&#xe885;</i> <span class="i-name">right-dir</span><span class="i-code">0xe885</span></div>
        <div title="Code: 0xe886" class="the-icons span3"><i class="demo-icon icontypo-up-dir">&#xe886;</i> <span class="i-name">up-dir</span><span class="i-code">0xe886</span></div>
        <div title="Code: 0xe887" class="the-icons span3"><i class="demo-icon icontypo-down-bold">&#xe887;</i> <span class="i-name">down-bold</span><span class="i-code">0xe887</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe888" class="the-icons span3"><i class="demo-icon icontypo-left-bold">&#xe888;</i> <span class="i-name">left-bold</span><span class="i-code">0xe888</span></div>
        <div title="Code: 0xe889" class="the-icons span3"><i class="demo-icon icontypo-right-bold">&#xe889;</i> <span class="i-name">right-bold</span><span class="i-code">0xe889</span></div>
        <div title="Code: 0xe88a" class="the-icons span3"><i class="demo-icon icontypo-up-bold">&#xe88a;</i> <span class="i-name">up-bold</span><span class="i-code">0xe88a</span></div>
        <div title="Code: 0xe88b" class="the-icons span3"><i class="demo-icon icontypo-down-thin">&#xe88b;</i> <span class="i-name">down-thin</span><span class="i-code">0xe88b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe88c" class="the-icons span3"><i class="demo-icon icontypo-left-thin">&#xe88c;</i> <span class="i-name">left-thin</span><span class="i-code">0xe88c</span></div>
        <div title="Code: 0xe88d" class="the-icons span3"><i class="demo-icon icontypo-right-thin">&#xe88d;</i> <span class="i-name">right-thin</span><span class="i-code">0xe88d</span></div>
        <div title="Code: 0xe88e" class="the-icons span3"><i class="demo-icon icontypo-up-thin">&#xe88e;</i> <span class="i-name">up-thin</span><span class="i-code">0xe88e</span></div>
        <div title="Code: 0xe88f" class="the-icons span3"><i class="demo-icon icontypo-ccw">&#xe88f;</i> <span class="i-name">ccw</span><span class="i-code">0xe88f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe890" class="the-icons span3"><i class="demo-icon icontypo-cw">&#xe890;</i> <span class="i-name">cw</span><span class="i-code">0xe890</span></div>
        <div title="Code: 0xe891" class="the-icons span3"><i class="demo-icon icontypo-arrows-ccw">&#xe891;</i> <span class="i-name">arrows-ccw</span><span class="i-code">0xe891</span></div>
        <div title="Code: 0xe892" class="the-icons span3"><i class="demo-icon icontypo-level-down">&#xe892;</i> <span class="i-name">level-down</span><span class="i-code">0xe892</span></div>
        <div title="Code: 0xe893" class="the-icons span3"><i class="demo-icon icontypo-level-up">&#xe893;</i> <span class="i-name">level-up</span><span class="i-code">0xe893</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe894" class="the-icons span3"><i class="demo-icon icontypo-shuffle">&#xe894;</i> <span class="i-name">shuffle</span><span class="i-code">0xe894</span></div>
        <div title="Code: 0xe895" class="the-icons span3"><i class="demo-icon icontypo-loop">&#xe895;</i> <span class="i-name">loop</span><span class="i-code">0xe895</span></div>
        <div title="Code: 0xe896" class="the-icons span3"><i class="demo-icon icontypo-switch">&#xe896;</i> <span class="i-name">switch</span><span class="i-code">0xe896</span></div>
        <div title="Code: 0xe897" class="the-icons span3"><i class="demo-icon icontypo-play">&#xe897;</i> <span class="i-name">play</span><span class="i-code">0xe897</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe898" class="the-icons span3"><i class="demo-icon icontypo-stop">&#xe898;</i> <span class="i-name">stop</span><span class="i-code">0xe898</span></div>
        <div title="Code: 0xe899" class="the-icons span3"><i class="demo-icon icontypo-pause">&#xe899;</i> <span class="i-name">pause</span><span class="i-code">0xe899</span></div>
        <div title="Code: 0xe89a" class="the-icons span3"><i class="demo-icon icontypo-record">&#xe89a;</i> <span class="i-name">record</span><span class="i-code">0xe89a</span></div>
        <div title="Code: 0xe89b" class="the-icons span3"><i class="demo-icon icontypo-to-end">&#xe89b;</i> <span class="i-name">to-end</span><span class="i-code">0xe89b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe89c" class="the-icons span3"><i class="demo-icon icontypo-to-start">&#xe89c;</i> <span class="i-name">to-start</span><span class="i-code">0xe89c</span></div>
        <div title="Code: 0xe89d" class="the-icons span3"><i class="demo-icon icontypo-fast-forward">&#xe89d;</i> <span class="i-name">fast-forward</span><span class="i-code">0xe89d</span></div>
        <div title="Code: 0xe89e" class="the-icons span3"><i class="demo-icon icontypo-fast-backward">&#xe89e;</i> <span class="i-name">fast-backward</span><span class="i-code">0xe89e</span></div>
        <div title="Code: 0xe89f" class="the-icons span3"><i class="demo-icon icontypo-progress-0">&#xe89f;</i> <span class="i-name">progress-0</span><span class="i-code">0xe89f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8a0" class="the-icons span3"><i class="demo-icon icontypo-progress-1">&#xe8a0;</i> <span class="i-name">progress-1</span><span class="i-code">0xe8a0</span></div>
        <div title="Code: 0xe8a1" class="the-icons span3"><i class="demo-icon icontypo-progress-2">&#xe8a1;</i> <span class="i-name">progress-2</span><span class="i-code">0xe8a1</span></div>
        <div title="Code: 0xe8a2" class="the-icons span3"><i class="demo-icon icontypo-progress-3">&#xe8a2;</i> <span class="i-name">progress-3</span><span class="i-code">0xe8a2</span></div>
        <div title="Code: 0xe8a3" class="the-icons span3"><i class="demo-icon icontypo-target">&#xe8a3;</i> <span class="i-name">target</span><span class="i-code">0xe8a3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8a4" class="the-icons span3"><i class="demo-icon icontypo-palette">&#xe8a4;</i> <span class="i-name">palette</span><span class="i-code">0xe8a4</span></div>
        <div title="Code: 0xe8a5" class="the-icons span3"><i class="demo-icon icontypo-list">&#xe8a5;</i> <span class="i-name">list</span><span class="i-code">0xe8a5</span></div>
        <div title="Code: 0xe8a6" class="the-icons span3"><i class="demo-icon icontypo-list-add">&#xe8a6;</i> <span class="i-name">list-add</span><span class="i-code">0xe8a6</span></div>
        <div title="Code: 0xe8a7" class="the-icons span3"><i class="demo-icon icontypo-signal">&#xe8a7;</i> <span class="i-name">signal</span><span class="i-code">0xe8a7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8a8" class="the-icons span3"><i class="demo-icon icontypo-trophy">&#xe8a8;</i> <span class="i-name">trophy</span><span class="i-code">0xe8a8</span></div>
        <div title="Code: 0xe8a9" class="the-icons span3"><i class="demo-icon icontypo-battery">&#xe8a9;</i> <span class="i-name">battery</span><span class="i-code">0xe8a9</span></div>
        <div title="Code: 0xe8aa" class="the-icons span3"><i class="demo-icon icontypo-back-in-time">&#xe8aa;</i> <span class="i-name">back-in-time</span><span class="i-code">0xe8aa</span></div>
        <div title="Code: 0xe8ab" class="the-icons span3"><i class="demo-icon icontypo-monitor">&#xe8ab;</i> <span class="i-name">monitor</span><span class="i-code">0xe8ab</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8ac" class="the-icons span3"><i class="demo-icon icontypo-mobile">&#xe8ac;</i> <span class="i-name">mobile</span><span class="i-code">0xe8ac</span></div>
        <div title="Code: 0xe8ad" class="the-icons span3"><i class="demo-icon icontypo-network">&#xe8ad;</i> <span class="i-name">network</span><span class="i-code">0xe8ad</span></div>
        <div title="Code: 0xe8ae" class="the-icons span3"><i class="demo-icon icontypo-cd">&#xe8ae;</i> <span class="i-name">cd</span><span class="i-code">0xe8ae</span></div>
        <div title="Code: 0xe8af" class="the-icons span3"><i class="demo-icon icontypo-inbox">&#xe8af;</i> <span class="i-name">inbox</span><span class="i-code">0xe8af</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8b0" class="the-icons span3"><i class="demo-icon icontypo-install">&#xe8b0;</i> <span class="i-name">install</span><span class="i-code">0xe8b0</span></div>
        <div title="Code: 0xe8b1" class="the-icons span3"><i class="demo-icon icontypo-globe">&#xe8b1;</i> <span class="i-name">globe</span><span class="i-code">0xe8b1</span></div>
        <div title="Code: 0xe8b2" class="the-icons span3"><i class="demo-icon icontypo-cloud">&#xe8b2;</i> <span class="i-name">cloud</span><span class="i-code">0xe8b2</span></div>
        <div title="Code: 0xe8b3" class="the-icons span3"><i class="demo-icon icontypo-cloud-thunder">&#xe8b3;</i> <span class="i-name">cloud-thunder</span><span class="i-code">0xe8b3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8b4" class="the-icons span3"><i class="demo-icon icontypo-flash">&#xe8b4;</i> <span class="i-name">flash</span><span class="i-code">0xe8b4</span></div>
        <div title="Code: 0xe8b5" class="the-icons span3"><i class="demo-icon icontypo-moon">&#xe8b5;</i> <span class="i-name">moon</span><span class="i-code">0xe8b5</span></div>
        <div title="Code: 0xe8b6" class="the-icons span3"><i class="demo-icon icontypo-flight">&#xe8b6;</i> <span class="i-name">flight</span><span class="i-code">0xe8b6</span></div>
        <div title="Code: 0xe8b7" class="the-icons span3"><i class="demo-icon icontypo-paper-plane">&#xe8b7;</i> <span class="i-name">paper-plane</span><span class="i-code">0xe8b7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8b8" class="the-icons span3"><i class="demo-icon icontypo-leaf">&#xe8b8;</i> <span class="i-name">leaf</span><span class="i-code">0xe8b8</span></div>
        <div title="Code: 0xe8b9" class="the-icons span3"><i class="demo-icon icontypo-lifebuoy">&#xe8b9;</i> <span class="i-name">lifebuoy</span><span class="i-code">0xe8b9</span></div>
        <div title="Code: 0xe8ba" class="the-icons span3"><i class="demo-icon icontypo-mouse">&#xe8ba;</i> <span class="i-name">mouse</span><span class="i-code">0xe8ba</span></div>
        <div title="Code: 0xe8bb" class="the-icons span3"><i class="demo-icon icontypo-briefcase">&#xe8bb;</i> <span class="i-name">briefcase</span><span class="i-code">0xe8bb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8bc" class="the-icons span3"><i class="demo-icon icontypo-suitcase">&#xe8bc;</i> <span class="i-name">suitcase</span><span class="i-code">0xe8bc</span></div>
        <div title="Code: 0xe8bd" class="the-icons span3"><i class="demo-icon icontypo-dot">&#xe8bd;</i> <span class="i-name">dot</span><span class="i-code">0xe8bd</span></div>
        <div title="Code: 0xe8be" class="the-icons span3"><i class="demo-icon icontypo-dot-2">&#xe8be;</i> <span class="i-name">dot-2</span><span class="i-code">0xe8be</span></div>
        <div title="Code: 0xe8bf" class="the-icons span3"><i class="demo-icon icontypo-dot-3">&#xe8bf;</i> <span class="i-name">dot-3</span><span class="i-code">0xe8bf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8c0" class="the-icons span3"><i class="demo-icon icontypo-brush">&#xe8c0;</i> <span class="i-name">brush</span><span class="i-code">0xe8c0</span></div>
        <div title="Code: 0xe8c1" class="the-icons span3"><i class="demo-icon icontypo-magnet">&#xe8c1;</i> <span class="i-name">magnet</span><span class="i-code">0xe8c1</span></div>
        <div title="Code: 0xe8c2" class="the-icons span3"><i class="demo-icon icontypo-infinity">&#xe8c2;</i> <span class="i-name">infinity</span><span class="i-code">0xe8c2</span></div>
        <div title="Code: 0xe8c3" class="the-icons span3"><i class="demo-icon icontypo-erase">&#xe8c3;</i> <span class="i-name">erase</span><span class="i-code">0xe8c3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8c4" class="the-icons span3"><i class="demo-icon icontypo-chart-pie">&#xe8c4;</i> <span class="i-name">chart-pie</span><span class="i-code">0xe8c4</span></div>
        <div title="Code: 0xe8c5" class="the-icons span3"><i class="demo-icon icontypo-chart-line">&#xe8c5;</i> <span class="i-name">chart-line</span><span class="i-code">0xe8c5</span></div>
        <div title="Code: 0xe8c6" class="the-icons span3"><i class="demo-icon icontypo-chart-bar">&#xe8c6;</i> <span class="i-name">chart-bar</span><span class="i-code">0xe8c6</span></div>
        <div title="Code: 0xe8c7" class="the-icons span3"><i class="demo-icon icontypo-chart-area">&#xe8c7;</i> <span class="i-name">chart-area</span><span class="i-code">0xe8c7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8c8" class="the-icons span3"><i class="demo-icon icontypo-tape">&#xe8c8;</i> <span class="i-name">tape</span><span class="i-code">0xe8c8</span></div>
        <div title="Code: 0xe8c9" class="the-icons span3"><i class="demo-icon icontypo-graduation-cap">&#xe8c9;</i> <span class="i-name">graduation-cap</span><span class="i-code">0xe8c9</span></div>
        <div title="Code: 0xe8ca" class="the-icons span3"><i class="demo-icon icontypo-language">&#xe8ca;</i> <span class="i-name">language</span><span class="i-code">0xe8ca</span></div>
        <div title="Code: 0xe8cb" class="the-icons span3"><i class="demo-icon icontypo-ticket">&#xe8cb;</i> <span class="i-name">ticket</span><span class="i-code">0xe8cb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8cc" class="the-icons span3"><i class="demo-icon icontypo-water">&#xe8cc;</i> <span class="i-name">water</span><span class="i-code">0xe8cc</span></div>
        <div title="Code: 0xe8cd" class="the-icons span3"><i class="demo-icon icontypo-droplet">&#xe8cd;</i> <span class="i-name">droplet</span><span class="i-code">0xe8cd</span></div>
        <div title="Code: 0xe8ce" class="the-icons span3"><i class="demo-icon icontypo-air">&#xe8ce;</i> <span class="i-name">air</span><span class="i-code">0xe8ce</span></div>
        <div title="Code: 0xe8cf" class="the-icons span3"><i class="demo-icon icontypo-credit-card">&#xe8cf;</i> <span class="i-name">credit-card</span><span class="i-code">0xe8cf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8d0" class="the-icons span3"><i class="demo-icon icontypo-floppy">&#xe8d0;</i> <span class="i-name">floppy</span><span class="i-code">0xe8d0</span></div>
        <div title="Code: 0xe8d1" class="the-icons span3"><i class="demo-icon icontypo-clipboard">&#xe8d1;</i> <span class="i-name">clipboard</span><span class="i-code">0xe8d1</span></div>
        <div title="Code: 0xe8d2" class="the-icons span3"><i class="demo-icon icontypo-megaphone">&#xe8d2;</i> <span class="i-name">megaphone</span><span class="i-code">0xe8d2</span></div>
        <div title="Code: 0xe8d3" class="the-icons span3"><i class="demo-icon icontypo-database">&#xe8d3;</i> <span class="i-name">database</span><span class="i-code">0xe8d3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8d4" class="the-icons span3"><i class="demo-icon icontypo-drive">&#xe8d4;</i> <span class="i-name">drive</span><span class="i-code">0xe8d4</span></div>
        <div title="Code: 0xe8d5" class="the-icons span3"><i class="demo-icon icontypo-bucket">&#xe8d5;</i> <span class="i-name">bucket</span><span class="i-code">0xe8d5</span></div>
        <div title="Code: 0xe8d6" class="the-icons span3"><i class="demo-icon icontypo-thermometer">&#xe8d6;</i> <span class="i-name">thermometer</span><span class="i-code">0xe8d6</span></div>
        <div title="Code: 0xe8d7" class="the-icons span3"><i class="demo-icon icontypo-key">&#xe8d7;</i> <span class="i-name">key</span><span class="i-code">0xe8d7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8d8" class="the-icons span3"><i class="demo-icon icontypo-flow-cascade">&#xe8d8;</i> <span class="i-name">flow-cascade</span><span class="i-code">0xe8d8</span></div>
        <div title="Code: 0xe8d9" class="the-icons span3"><i class="demo-icon icontypo-flow-branch">&#xe8d9;</i> <span class="i-name">flow-branch</span><span class="i-code">0xe8d9</span></div>
        <div title="Code: 0xe8da" class="the-icons span3"><i class="demo-icon icontypo-flow-tree">&#xe8da;</i> <span class="i-name">flow-tree</span><span class="i-code">0xe8da</span></div>
        <div title="Code: 0xe8db" class="the-icons span3"><i class="demo-icon icontypo-flow-line">&#xe8db;</i> <span class="i-name">flow-line</span><span class="i-code">0xe8db</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8dc" class="the-icons span3"><i class="demo-icon icontypo-flow-parallel">&#xe8dc;</i> <span class="i-name">flow-parallel</span><span class="i-code">0xe8dc</span></div>
        <div title="Code: 0xe8dd" class="the-icons span3"><i class="demo-icon icontypo-rocket">&#xe8dd;</i> <span class="i-name">rocket</span><span class="i-code">0xe8dd</span></div>
        <div title="Code: 0xe8de" class="the-icons span3"><i class="demo-icon icontypo-gauge">&#xe8de;</i> <span class="i-name">gauge</span><span class="i-code">0xe8de</span></div>
        <div title="Code: 0xe8df" class="the-icons span3"><i class="demo-icon icontypo-traffic-cone">&#xe8df;</i> <span class="i-name">traffic-cone</span><span class="i-code">0xe8df</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8e0" class="the-icons span3"><i class="demo-icon icontypo-cc">&#xe8e0;</i> <span class="i-name">cc</span><span class="i-code">0xe8e0</span></div>
        <div title="Code: 0xe8e1" class="the-icons span3"><i class="demo-icon icontypo-cc-by">&#xe8e1;</i> <span class="i-name">cc-by</span><span class="i-code">0xe8e1</span></div>
        <div title="Code: 0xe8e2" class="the-icons span3"><i class="demo-icon icontypo-cc-nc">&#xe8e2;</i> <span class="i-name">cc-nc</span><span class="i-code">0xe8e2</span></div>
        <div title="Code: 0xe8e3" class="the-icons span3"><i class="demo-icon icontypo-cc-nc-eu">&#xe8e3;</i> <span class="i-name">cc-nc-eu</span><span class="i-code">0xe8e3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8e4" class="the-icons span3"><i class="demo-icon icontypo-cc-nc-jp">&#xe8e4;</i> <span class="i-name">cc-nc-jp</span><span class="i-code">0xe8e4</span></div>
        <div title="Code: 0xe8e5" class="the-icons span3"><i class="demo-icon icontypo-cc-sa">&#xe8e5;</i> <span class="i-name">cc-sa</span><span class="i-code">0xe8e5</span></div>
        <div title="Code: 0xe8e6" class="the-icons span3"><i class="demo-icon icontypo-cc-nd">&#xe8e6;</i> <span class="i-name">cc-nd</span><span class="i-code">0xe8e6</span></div>
        <div title="Code: 0xe8e7" class="the-icons span3"><i class="demo-icon icontypo-cc-pd">&#xe8e7;</i> <span class="i-name">cc-pd</span><span class="i-code">0xe8e7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8e8" class="the-icons span3"><i class="demo-icon icontypo-cc-zero">&#xe8e8;</i> <span class="i-name">cc-zero</span><span class="i-code">0xe8e8</span></div>
        <div title="Code: 0xe8e9" class="the-icons span3"><i class="demo-icon icontypo-cc-share">&#xe8e9;</i> <span class="i-name">cc-share</span><span class="i-code">0xe8e9</span></div>
        <div title="Code: 0xe8ea" class="the-icons span3"><i class="demo-icon icontypo-cc-remix">&#xe8ea;</i> <span class="i-name">cc-remix</span><span class="i-code">0xe8ea</span></div>
        <div title="Code: 0xe8eb" class="the-icons span3"><i class="demo-icon icontypo-github">&#xe8eb;</i> <span class="i-name">github</span><span class="i-code">0xe8eb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8ec" class="the-icons span3"><i class="demo-icon icontypo-github-circled">&#xe8ec;</i> <span class="i-name">github-circled</span><span class="i-code">0xe8ec</span></div>
        <div title="Code: 0xe8ed" class="the-icons span3"><i class="demo-icon icontypo-flickr">&#xe8ed;</i> <span class="i-name">flickr</span><span class="i-code">0xe8ed</span></div>
        <div title="Code: 0xe8ee" class="the-icons span3"><i class="demo-icon icontypo-flickr-circled">&#xe8ee;</i> <span class="i-name">flickr-circled</span><span class="i-code">0xe8ee</span></div>
        <div title="Code: 0xe8ef" class="the-icons span3"><i class="demo-icon icontypo-vimeo">&#xe8ef;</i> <span class="i-name">vimeo</span><span class="i-code">0xe8ef</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8f0" class="the-icons span3"><i class="demo-icon icontypo-vimeo-circled">&#xe8f0;</i> <span class="i-name">vimeo-circled</span><span class="i-code">0xe8f0</span></div>
        <div title="Code: 0xe8f1" class="the-icons span3"><i class="demo-icon icontypo-twitter">&#xe8f1;</i> <span class="i-name">twitter</span><span class="i-code">0xe8f1</span></div>
        <div title="Code: 0xe8f2" class="the-icons span3"><i class="demo-icon icontypo-twitter-circled">&#xe8f2;</i> <span class="i-name">twitter-circled</span><span class="i-code">0xe8f2</span></div>
        <div title="Code: 0xe8f3" class="the-icons span3"><i class="demo-icon icontypo-facebook">&#xe8f3;</i> <span class="i-name">facebook</span><span class="i-code">0xe8f3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8f4" class="the-icons span3"><i class="demo-icon icontypo-facebook-circled">&#xe8f4;</i> <span class="i-name">facebook-circled</span><span class="i-code">0xe8f4</span></div>
        <div title="Code: 0xe8f5" class="the-icons span3"><i class="demo-icon icontypo-facebook-squared">&#xe8f5;</i> <span class="i-name">facebook-squared</span><span class="i-code">0xe8f5</span></div>
        <div title="Code: 0xe8f6" class="the-icons span3"><i class="demo-icon icontypo-gplus">&#xe8f6;</i> <span class="i-name">gplus</span><span class="i-code">0xe8f6</span></div>
        <div title="Code: 0xe8f7" class="the-icons span3"><i class="demo-icon icontypo-gplus-circled">&#xe8f7;</i> <span class="i-name">gplus-circled</span><span class="i-code">0xe8f7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8f8" class="the-icons span3"><i class="demo-icon icontypo-pinterest">&#xe8f8;</i> <span class="i-name">pinterest</span><span class="i-code">0xe8f8</span></div>
        <div title="Code: 0xe8f9" class="the-icons span3"><i class="demo-icon icontypo-pinterest-circled">&#xe8f9;</i> <span class="i-name">pinterest-circled</span><span class="i-code">0xe8f9</span></div>
        <div title="Code: 0xe8fa" class="the-icons span3"><i class="demo-icon icontypo-tumblr">&#xe8fa;</i> <span class="i-name">tumblr</span><span class="i-code">0xe8fa</span></div>
        <div title="Code: 0xe8fb" class="the-icons span3"><i class="demo-icon icontypo-tumblr-circled">&#xe8fb;</i> <span class="i-name">tumblr-circled</span><span class="i-code">0xe8fb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8fc" class="the-icons span3"><i class="demo-icon icontypo-linkedin">&#xe8fc;</i> <span class="i-name">linkedin</span><span class="i-code">0xe8fc</span></div>
        <div title="Code: 0xe8fd" class="the-icons span3"><i class="demo-icon icontypo-linkedin-circled">&#xe8fd;</i> <span class="i-name">linkedin-circled</span><span class="i-code">0xe8fd</span></div>
        <div title="Code: 0xe8fe" class="the-icons span3"><i class="demo-icon icontypo-dribbble">&#xe8fe;</i> <span class="i-name">dribbble</span><span class="i-code">0xe8fe</span></div>
        <div title="Code: 0xe8ff" class="the-icons span3"><i class="demo-icon icontypo-dribbble-circled">&#xe8ff;</i> <span class="i-name">dribbble-circled</span><span class="i-code">0xe8ff</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe900" class="the-icons span3"><i class="demo-icon icontypo-stumbleupon">&#xe900;</i> <span class="i-name">stumbleupon</span><span class="i-code">0xe900</span></div>
        <div title="Code: 0xe901" class="the-icons span3"><i class="demo-icon icontypo-stumbleupon-circled">&#xe901;</i> <span class="i-name">stumbleupon-circled</span><span class="i-code">0xe901</span></div>
        <div title="Code: 0xe902" class="the-icons span3"><i class="demo-icon icontypo-lastfm">&#xe902;</i> <span class="i-name">lastfm</span><span class="i-code">0xe902</span></div>
        <div title="Code: 0xe903" class="the-icons span3"><i class="demo-icon icontypo-lastfm-circled">&#xe903;</i> <span class="i-name">lastfm-circled</span><span class="i-code">0xe903</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe904" class="the-icons span3"><i class="demo-icon icontypo-rdio">&#xe904;</i> <span class="i-name">rdio</span><span class="i-code">0xe904</span></div>
        <div title="Code: 0xe905" class="the-icons span3"><i class="demo-icon icontypo-rdio-circled">&#xe905;</i> <span class="i-name">rdio-circled</span><span class="i-code">0xe905</span></div>
        <div title="Code: 0xe906" class="the-icons span3"><i class="demo-icon icontypo-spotify">&#xe906;</i> <span class="i-name">spotify</span><span class="i-code">0xe906</span></div>
        <div title="Code: 0xe907" class="the-icons span3"><i class="demo-icon icontypo-spotify-circled">&#xe907;</i> <span class="i-name">spotify-circled</span><span class="i-code">0xe907</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe908" class="the-icons span3"><i class="demo-icon icontypo-qq">&#xe908;</i> <span class="i-name">qq</span><span class="i-code">0xe908</span></div>
        <div title="Code: 0xe909" class="the-icons span3"><i class="demo-icon icontypo-instagram">&#xe909;</i> <span class="i-name">instagram</span><span class="i-code">0xe909</span></div>
        <div title="Code: 0xe90a" class="the-icons span3"><i class="demo-icon icontypo-dropbox">&#xe90a;</i> <span class="i-name">dropbox</span><span class="i-code">0xe90a</span></div>
        <div title="Code: 0xe90b" class="the-icons span3"><i class="demo-icon icontypo-evernote">&#xe90b;</i> <span class="i-name">evernote</span><span class="i-code">0xe90b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe90c" class="the-icons span3"><i class="demo-icon icontypo-flattr">&#xe90c;</i> <span class="i-name">flattr</span><span class="i-code">0xe90c</span></div>
        <div title="Code: 0xe90d" class="the-icons span3"><i class="demo-icon icontypo-skype">&#xe90d;</i> <span class="i-name">skype</span><span class="i-code">0xe90d</span></div>
        <div title="Code: 0xe90e" class="the-icons span3"><i class="demo-icon icontypo-skype-circled">&#xe90e;</i> <span class="i-name">skype-circled</span><span class="i-code">0xe90e</span></div>
        <div title="Code: 0xe90f" class="the-icons span3"><i class="demo-icon icontypo-renren">&#xe90f;</i> <span class="i-name">renren</span><span class="i-code">0xe90f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe910" class="the-icons span3"><i class="demo-icon icontypo-sina-weibo">&#xe910;</i> <span class="i-name">sina-weibo</span><span class="i-code">0xe910</span></div>
        <div title="Code: 0xe911" class="the-icons span3"><i class="demo-icon icontypo-paypal">&#xe911;</i> <span class="i-name">paypal</span><span class="i-code">0xe911</span></div>
        <div title="Code: 0xe912" class="the-icons span3"><i class="demo-icon icontypo-picasa">&#xe912;</i> <span class="i-name">picasa</span><span class="i-code">0xe912</span></div>
        <div title="Code: 0xe913" class="the-icons span3"><i class="demo-icon icontypo-soundcloud">&#xe913;</i> <span class="i-name">soundcloud</span><span class="i-code">0xe913</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe914" class="the-icons span3"><i class="demo-icon icontypo-mixi">&#xe914;</i> <span class="i-name">mixi</span><span class="i-code">0xe914</span></div>
        <div title="Code: 0xe915" class="the-icons span3"><i class="demo-icon icontypo-behance">&#xe915;</i> <span class="i-name">behance</span><span class="i-code">0xe915</span></div>
        <div title="Code: 0xe916" class="the-icons span3"><i class="demo-icon icontypo-google-circles">&#xe916;</i> <span class="i-name">google-circles</span><span class="i-code">0xe916</span></div>
        <div title="Code: 0xe917" class="the-icons span3"><i class="demo-icon icontypo-vkontakte">&#xe917;</i> <span class="i-name">vkontakte</span><span class="i-code">0xe917</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe918" class="the-icons span3"><i class="demo-icon icontypo-smashing">&#xe918;</i> <span class="i-name">smashing</span><span class="i-code">0xe918</span></div>
        <div title="Code: 0xe919" class="the-icons span3"><i class="demo-icon icontypo-sweden">&#xe919;</i> <span class="i-name">sweden</span><span class="i-code">0xe919</span></div>
        <div title="Code: 0xe91a" class="the-icons span3"><i class="demo-icon icontypo-db-shape">&#xe91a;</i> <span class="i-name">db-shape</span><span class="i-code">0xe91a</span></div>
        <div title="Code: 0xe91b" class="the-icons span3"><i class="demo-icon icontypo-logo-db">&#xe91b;</i> <span class="i-name">logo-db</span><span class="i-code">0xe91b</span></div>
      </div>
    </div>';
  }

  public function element() {
    $element = parent::element();
    return $element;
  }

}
