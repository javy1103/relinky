<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">

    <title>Relinky</title>

    <link href="/css/uikit-flat.css" rel="stylesheet" type="text/css">
    <script src="/js/dashboard/dashboard.js"></script>
    <link href="/css/dashboard/main.css" rel="stylesheet" type="text/css">
    @yield('head')


</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">

                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>

                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>

                <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                    <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                        <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                        <div class="uk-dropdown uk-dropdown-width-3">
                            <div class="uk-grid uk-dropdown-grid">
                                <div class="uk-width-2-3">
                                    <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-bottom uk-text-center">
                                        <a href="page_mailbox.html" class="uk-margin-top">
                                            <i class="material-icons md-36 md-color-light-green-600">&#xE158;</i>
                                            <span class="uk-text-muted uk-display-block">Mailbox</span>
                                        </a>
                                        <a href="page_invoices.html" class="uk-margin-top">
                                            <i class="material-icons md-36 md-color-purple-600">&#xE53E;</i>
                                            <span class="uk-text-muted uk-display-block">Invoices</span>
                                        </a>
                                        <a href="page_chat.html" class="uk-margin-top">
                                            <i class="material-icons md-36 md-color-cyan-600">&#xE0B9;</i>
                                            <span class="uk-text-muted uk-display-block">Chat</span>
                                        </a>
                                        <a href="page_scrum_board.html" class="uk-margin-top">
                                            <i class="material-icons md-36 md-color-red-600">&#xE85C;</i>
                                            <span class="uk-text-muted uk-display-block">Scrum Board</span>
                                        </a>
                                        <a href="page_snippets.html" class="uk-margin-top">
                                            <i class="material-icons md-36 md-color-blue-600">&#xE86F;</i>
                                            <span class="uk-text-muted uk-display-block">Snippets</span>
                                        </a>
                                        <a href="page_user_profile.html" class="uk-margin-top">
                                            <i class="material-icons md-36 md-color-orange-600">&#xE87C;</i>
                                            <span class="uk-text-muted uk-display-block">User profile</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-width-1-3">
                                    <ul class="uk-nav uk-nav-dropdown uk-panel">
                                        <li class="uk-nav-header">Components</li>
                                        <li><a href="components_accordion.html">Accordions</a></li>
                                        <li><a href="components_buttons.html">Buttons</a></li>
                                        <li><a href="components_notifications.html">Notifications</a></li>
                                        <li><a href="components_sortable.html">Sortable</a></li>
                                        <li><a href="components_tabs.html">Tabs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
                        <li><a href="#" id="main_search_btn" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE8B6;</i></a></li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_icon"><i class="material-icons md-24 md-light">&#xE7F4;</i><span class="uk-badge">16</span></a>
                            <div class="uk-dropdown uk-dropdown-xlarge">
                                <div class="md-card-content">
                                    <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#header_alerts',animation:'slide-horizontal'}">
                                        <li class="uk-width-1-2 uk-active"><a href="#" class="js-uk-prevent uk-text-small">Messages (12)</a></li>
                                        <li class="uk-width-1-2"><a href="#" class="js-uk-prevent uk-text-small">Alerts (4)</a></li>
                                    </ul>
                                    <ul id="header_alerts" class="uk-switcher uk-margin">
                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-cyan">pm</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Quia et.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Rerum et natus labore mollitia maiores iure at in voluptas voluptas.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="img/avatars/avatar_07_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Dolores officiis repellendus.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Reprehenderit optio aliquam sit et.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <span class="md-user-letters md-bg-light-green">ji</span>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Est ab.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Qui repellendus at voluptates ab in qui.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="img/avatars/avatar_02_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Vitae explicabo molestiae.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Repudiandae quaerat alias voluptatem rerum minus eos ut.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <img class="md-user-image md-list-addon-avatar" src="img/avatars/avatar_09_tn.png" alt=""/>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"><a href="pages_mailbox.html">Est deserunt.</a></span>
                                                        <span class="uk-text-small uk-text-muted">Perferendis autem et velit rerum commodi.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="uk-text-center uk-margin-top uk-margin-small-bottom">
                                                <a href="page_mailbox.html" class="md-btn md-btn-flat md-btn-flat-primary js-uk-prevent">Show All</a>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-warning">&#xE8B2;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Et est perferendis.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Qui voluptas natus ea enim omnis.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-success">&#xE88F;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Assumenda dolor.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Numquam animi ea est quia aut reprehenderit.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-danger">&#xE001;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Quis aut.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Veritatis natus quod harum magnam quo ipsam aut consequatur.</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons uk-text-primary">&#xE8FD;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading">Dolores rerum quia.</span>
                                                        <span class="uk-text-small uk-text-muted uk-text-truncate">Ut veritatis delectus maxime nobis ex inventore laudantium placeat.</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="{{ $user->profile->profileImage() }}" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="{{ route('users.show', [ 'user' => $user ]) }}">My profile</a></li>
                                    <li><a href="page_settings.html">Settings</a></li>
                                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_main_search_form">
            <i class="md-icon header_main_search_close material-icons">&#xE5CD;</i>
            <form class="uk-form uk-autocomplete" data-uk-autocomplete="{source:'data/search_data.json'}">
                <input type="text" class="header_main_search_input" />
                <button class="header_main_search_btn uk-button-link"><i class="md-icon material-icons">&#xE8B6;</i></button>

            </form>
        </div>
    </header><!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">

        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="index.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>

        <div class="menu_section">
            <ul>
                <li class="current_section" title="Dashboard">
                    <a href="index.html">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                </li>
                <li title="Mailbox">
                    <a href="page_mailbox.html">
                        <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                        <span class="menu_title">Mailbox</span>
                    </a>
                </li>
                <li title="Invoices">
                    <a href="page_invoices.html">
                        <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                        <span class="menu_title">Invoices</span>
                    </a>
                </li>
                <li title="Chat">
                    <a href="page_chat.html">
                        <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                        <span class="menu_title">Chat</span>
                    </a>
                </li>
                <li title="Scrum Board">
                    <a href="page_scrum_board.html">
                        <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                        <span class="menu_title">Scrum Board</span>
                    </a>
                </li>
                <li title="Snippets">
                    <a href="page_snippets.html">
                        <span class="menu_icon"><i class="material-icons">&#xE86F;</i></span>
                        <span class="menu_title">Snippets</span>
                    </a>
                </li>
                <li title="User Profile">
                    <a href="page_user_profile.html">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">User Profile</span>
                    </a>
                </li>
                <li title="Forms">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                        <span class="menu_title">Forms</span>
                    </a>
                    <ul>
                        <li><a href="forms_regular.html">Regular Elements</a></li>
                        <li><a href="forms_advanced.html">Advanced Elements</a></li>
                        <li><a href="forms_dynamic.html">Dynamic</a></li>
                        <li><a href="forms_file_input.html">File Input</a></li>
                        <li><a href="forms_file_upload.html">File Upload</a></li>
                        <li><a href="forms_validation.html">Validation</a></li>
                        <li><a href="forms_wizard.html">Wizard</a></li>
                        <li class="menu_subtitle">WYSIWYG Editors</li>
                        <li><a href="forms_wysiwyg_ckeditor.html">CKeditor</a></li>
                        <li><a href="forms_wysiwyg_inline.html">Ckeditor Inline</a></li>
                        <li><a href="forms_wysiwyg_tinymce.html">TinyMCE</a></li>
                    </ul>
                </li>
                <li title="Layout">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                        <span class="menu_title">Layout</span>
                    </a>
                    <ul>
                        <li><a href="layout_top_menu.html">Top Menu</a></li>
                        <li><a href="layout_header_full.html">Full Header</a></li>
                    </ul>
                </li>
                <li title="Kendo UI Widgets">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE1BD;</i></span>
                        <span class="menu_title">Kendo UI Widgets</span>
                    </a>
                    <ul>
                        <li><a href="kendoui_autocomplete.html">Autocomplete</a></li>
                        <li><a href="kendoui_calendar.html">Calendar</a></li>
                        <li><a href="kendoui_colorpicker.html">ColorPicker</a></li>
                        <li><a href="kendoui_combobox.html">ComboBox</a></li>
                        <li><a href="kendoui_datepicker.html">DatePicker</a></li>
                        <li><a href="kendoui_datetimepicker.html">DateTimePicker</a></li>
                        <li><a href="kendoui_dropdown_list.html">DropDownList</a></li>
                        <li><a href="kendoui_masked_input.html">Masked Input</a></li>
                        <li><a href="kendoui_menu.html">Menu</a></li>
                        <li><a href="kendoui_multiselect.html">MultiSelect</a></li>
                        <li><a href="kendoui_numeric_textbox.html">Numeric TextBox</a></li>
                        <li><a href="kendoui_panelbar.html">PanelBar</a></li>
                        <li><a href="kendoui_timepicker.html">TimePicker</a></li>
                        <li><a href="kendoui_toolbar.html">Toolbar</a></li>
                        <li><a href="kendoui_window.html">Window</a></li>
                    </ul>
                </li>
                <li title="Components">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE87B;</i></span>
                        <span class="menu_title">Components</span>
                    </a>
                    <ul>
                        <li><a href="components_accordion.html">Accordions</a></li>
                        <li><a href="components_autocomplete.html">Autocomplete</a></li>
                        <li><a href="components_breadcrumbs.html">Breadcrumbs</a></li>
                        <li><a href="components_buttons.html">Buttons</a></li>
                        <li><a href="components_fab.html">Buttons: FAB</a></li>
                        <li><a href="components_cards.html">Cards</a></li>
                        <li><a href="components_colors.html">Colors</a></li>
                        <li><a href="components_common.html">Common</a></li>
                        <li><a href="components_dropdowns.html">Dropdowns</a></li>
                        <li><a href="components_dynamic_grid.html">Dynamic Grid</a></li>
                        <li><a href="components_footer.html">Footer</a></li>
                        <li><a href="components_grid.html">Grid</a></li>
                        <li><a href="components_icons.html">Icons</a></li>
                        <li><a href="components_modal.html">Lightbox/Modal</a></li>
                        <li><a href="components_lists.html">Lists</a></li>
                        <li><a href="components_nestable.html">Nestable</a></li>
                        <li><a href="components_notifications.html">Notifications</a></li>
                        <li><a href="components_panels.html">Panels</a></li>
                        <li><a href="components_preloaders.html">Preloaders</a></li>
                        <li><a href="components_slider.html">Slider</a></li>
                        <li><a href="components_slideshow.html">Slideshow</a></li>
                        <li><a href="components_sortable.html">Sortable</a></li>
                        <li><a href="components_switcher.html">Switcher</a></li>
                        <li><a href="components_tables.html">Tables</a></li>
                        <li><a href="components_tables_examples.html">Tables Examples</a></li>
                        <li><a href="components_tabs.html">Tabs</a></li>
                        <li><a href="components_tooltips.html">Tooltips</a></li>
                        <li><a href="components_typography.html">Typography</a></li>
                    </ul>
                </li>
                <li title="E-commerce">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8CB;</i></span>
                        <span class="menu_title">E-commerce</span>
                    </a>
                    <ul>
                        <li><a href="ecommerce_product_details.html">Product Details</a></li>
                        <li><a href="ecommerce_product_edit.html">Product Edit</a></li>
                        <li><a href="ecommerce_products_grid.html">Products Grid</a></li>
                        <li><a href="ecommerce_products_list.html">Products List</a></li>
                    </ul>
                </li>
                <li title="Plugins">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span>
                        <span class="menu_title">Plugins</span>
                    </a>
                    <ul>
                        <li><a href="plugins_calendar.html">Calendar</a></li>
                        <li><a href="plugins_charts.html">Charts</a></li>
                        <li><a href="plugins_code_editor.html">Code Editor</a></li>
                        <li><a href="plugins_crud_table.html">CRUD Table</a></li>
                        <li><a href="plugins_datatables.html">Datatables</a></li>
                        <li><a href="plugins_diff.html">Diff View</a></li>
                        <li><a href="plugins_filemanager.html">File Manager</a></li>
                        <li><a href="plugins_gantt_chart.html">Gantt Chart</a></li>
                        <li><a href="plugins_google_maps.html">Google Maps</a></li>
                        <li><a href="plugins_idle_timeout.html">Idle Timeout</a></li>
                        <li><a href="plugins_tour.html">Tour</a></li>
                        <li><a href="plugins_tablesorter.html">Tablesorter</a></li>
                        <li><a href="plugins_tree.html">Tree</a></li>
                        <li><a href="plugins_vector_maps.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li title="Pages">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE24D;</i></span>
                        <span class="menu_title">Pages</span>
                    </a>
                    <ul>
                        <li><a href="page_blank.html">Blank</a></li>
                        <li><a href="page_contact_list.html">Contact List</a></li>
                        <li><a href="page_gallery.html">Gallery</a></li>
                        <li><a href="page_help.html">Help/Faq</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li><a href="page_notes.html">Notes</a></li>
                        <li><a href="page_pricing_tables.html">Pricing Tables</a></li>
                        <li><a href="page_search_results.html">Search Results</a></li>
                        <li><a href="page_settings.html">Settings</a></li>
                        <li><a href="page_todo.html">Todo</a></li>
                        <li><a href="page_user_edit.html">User edit</a></li>
                        <li class="menu_subtitle">Issue Tracker</li>
                        <li><a href="page_issues_list.html">List View</a></li>
                        <li><a href="page_issue_details.html">Issue Details</a></li>
                        <li class="menu_subtitle">Blog</li>
                        <li><a href="page_blog_list.html">Blog List</a></li>
                        <li><a href="page_blog_article.html">Blog Article</a></li>
                        <li class="menu_subtitle">Errors</li>
                        <li><a href="error_404.html">Error 404</a></li>
                        <li><a href="error_500.html">Error 500</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE241;</i></span>
                        <span class="menu_title">Multi level</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">First level</a>
                            <ul>
                                <li>
                                    <a href="#">Second Level</a>
                                    <ul>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Long title to test</a>
                                    <ul>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                        <li>
                                            <a href="#">Third level</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Even longer title multi line</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->

    <div id="page_content">
        @yield('content')
    </div>

</body>
</html>
