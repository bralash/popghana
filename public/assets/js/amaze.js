"use strict";

(function() {
    var fixedTop = false;

    var mobile_menu_visible = 0,
        mobile_menu_initialized = false,
        toggle_initialized = false,
        bootstrap_nav_initialized = false,
        $sidebar = $('.sidebar'),
        isWindows;
    var $window = $(window);
    var $body = $('body');
    var $html = $('html');
    var $sidebar_wrapper = $('.sidebar-wrapper');
    isWindows = navigator.platform.indexOf('Win') > -1 ? true : false;

    if (isWindows && !$body.hasClass('sidebar-mini')) {
        // if we are on windows OS we activate the perfectScrollbar function
        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        $html.addClass('perfect-scrollbar-on');
    } else {
        $html.addClass('perfect-scrollbar-off');
    }

    $(document).ready(function() {

        $('#usersTable').DataTable({
            "order": [
                [6, "desc"]
            ]
        });
        var modal = UIkit.modal("#profileModal"),
            editModal = UIkit.modal('#editModal'),
            deleteModal = UIkit.modal('#deleteModal');



        $(document.body).on('click', 'span.profile', function() {
            var data = $(this).closest('td'),
                dataObj = {
                    name: data.attr('data-name'),
                    email: data.attr('data-email'),
                    contact: data.attr('data-contact'),
                    address: data.attr('data-address'),
                    user_code: data.attr('data-user-code'),
                    nok: data.attr('data-nok'),
                    nkc: data.attr('data-nkc'),
                    payment: data.attr('data-payment'),
                    mm_number: data.attr('data-mm'),
                    mm_name: data.attr('data-mname'),
                    acc_name: data.attr('data-accname'),
                    acc_num: data.attr('data-accnum'),
                    bank: data.attr('data-bank'),
                    upliner: data.attr('data-up'),
                    ref: data.attr('data-ref'),
                    status: data.attr('data-status')
                },
                modalObj = $('#profileModal'),
                modelData = $('.modelData');
            modalObj.find('.uk-modal-title').text(dataObj.name);
            modelData.find('.usrEmail').text(dataObj.email);
            modelData.find('.usrAddress').text(dataObj.address);
            modelData.find('.usrCode').text(dataObj.user_code);
            modelData.find('.usrNok').text(dataObj.nok);
            modelData.find('.usrNkc').text(dataObj.nkc);
            modelData.find('.usrPayment').text(dataObj.payment);
            modelData.find('.usrMN').text(dataObj.mm_number);
            modelData.find('.usrMMN').text(dataObj.mm_name);
            modelData.find('.usrAN').text(dataObj.acc_name);
            modelData.find('.usrAcN').text(dataObj.acc_num);
            modelData.find('.usrBank').text(dataObj.bank);
            modelData.find('.usrUp').text(dataObj.upliner);
            modelData.find('.usrUpliner').text(dataObj.upliner);
            if (dataObj.status == 0) {
                dataObj.status = 'Inactive';
            } else if (dataObj.status == 1) {
                dataObj.status = 'Active';
            } else if (dataObj.status == 3) {
                dataObj.status = 'Admin';
            }
            modelData.find('.usrStatus').text(dataObj.status);
            modelData.find('.usrRef').text(dataObj.ref);
            modal.show();
        });

        $(document).on('click','.editUsr', function() {
            var usrid = $(this).attr('data-usrId');
            $('#usrid').val(usrid);
            editModal.show();
        });

        $(document).on('click','.delUsr', function() {
            var usrid = $(this).attr('data-usrId'),
                username = $(this).attr('data-name');
            $('#usrName').text(username);
            $('.delUsrBtn').attr('href', 'del-upliner/' + usrid);
            deleteModal.show();
        });

        var window_width = $window.width();

        if ($body.hasClass('sidebar-mini')) {
            pdp.misc.sidebar_mini_active = true;
        }

        pdp.initSidebarsCheck();

        pdp.initMinimizeSidebar();

        $('.form-control').on("focus", function() {
            $(this).parent('.input-group').addClass("input-group-focus");
        }).on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
        });

        //  Activate the tooltips
        $('[rel="tooltip"]').tooltip();

        // Init Tags Input
        if ($(".tagsinput").length != 0) {
            $(".tagsinput").tagsInput();
        }

        //  Init Bootstrap Select Picker
        if ($(".selectpicker").length != 0) {
            $(".selectpicker").selectpicker({
                size: 9
            });
        }


    });



    // activate collapse right menu when the windows is resized
    $window.resize(function() {
        pdp.initSidebarsCheck();

    });

    var pdp = {
        misc: {
            navbar_menu_visible: 0,
            active_collapse: true,
            disabled_collapse_init: 0

        },
        initSidebarsCheck: function() {
            // Init navigation toggle for small screens
            if ($window.width() <= 991) {
                if ($sidebar.length !== 0) {
                    pdp.initSidebarMenu();
                } else {
                    pdp.initBootstrapNavbarMenu();
                }
            } else if (mobile_menu_initialized === true) {
                // reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
                $sidebar_wrapper.find('.navbar-form').remove();
                $sidebar_wrapper.find('.nav-mobile-menu').remove();

                mobile_menu_initialized = false;
            }
        },

        initMinimizeSidebar: function() {
            var $sidebar_collapse = $('.sidebar .collapse');

            // when we are on a Desktop Screen and the collapse is triggered we check if the sidebar mini is active or not. If it is active then we don't let the collapse to show the elements because the elements from the collapse are showing on the hover state over the icons in sidebar mini, not on the click.
            $sidebar_collapse.on('show.bs.collapse', function() {
                if ($window.width() > 991) {
                    if (pdp.misc.sidebar_mini_active === true) {
                        return false;
                    } else {
                        return true;
                    }
                }
            });

            $('#minimizeSidebar').on('click', function() {
                var $btn = $(this);

                if (pdp.misc.sidebar_mini_active === true) {
                    $body.removeClass('sidebar-mini');
                    $btn.html('<i class="ion-chevron-left"></i>');
                    pdp.misc.sidebar_mini_active = false;

                    if (isWindows) {
                        $('.sidebar .sidebar-wrapper').perfectScrollbar();
                    }

                } else {

                    $sidebar_collapse.collapse('hide').on('hidden.bs.collapse', function() {
                        $(this).css('height', 'auto');
                    });

                    if (isWindows) {
                        $('.sidebar .sidebar-wrapper').perfectScrollbar('destroy');
                    }

                    setTimeout(function() {
                        $body.addClass('sidebar-mini');
                        $btn.html('<i class="ion-chevron-right"></i>');

                        $sidebar_collapse.css('height', 'auto');
                        pdp.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });
        },

        initSidebarMenu: function() {

            if (!mobile_menu_initialized) {

                var $navbar = $('nav').find('.navbar-collapse').first().clone(true);

                var nav_content = '';
                var mobile_menu_content = '';

                $navbar.children('ul').each(function() {

                    var content_buff = $(this).html();
                    nav_content = nav_content + content_buff;
                });

                nav_content = '<ul class="nav nav-mobile-menu">' + nav_content + '</ul>';

                var $navbar_form = $('nav').find('.navbar-form').clone(true);

                var $sidebar_nav = $sidebar_wrapper.find(' > .nav');

                // insert the navbar form before the sidebar list
                var $nav_content = $(nav_content);
                $nav_content.insertBefore($sidebar_nav);
                $navbar_form.insertBefore($nav_content);

                $(".sidebar-wrapper .dropdown .dropdown-menu > li > a").on('click', function(event) {
                    event.stopPropagation();

                });

                mobile_menu_initialized = true;
            } else {
                if ($window.width() > 991) {
                    // reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
                    $sidebar_wrapper.find('.navbar-form').remove();
                    $sidebar_wrapper.find('.nav-mobile-menu').remove();

                    mobile_menu_initialized = false;
                }
            }

            if (!toggle_initialized) {
                var $toggle = $('.navbar-toggle');

                $toggle.on('click', function() {

                    if (mobile_menu_visible === 1) {
                        $html.removeClass('nav-open');

                        $('.close-layer').remove();
                        setTimeout(function() {
                            $toggle.removeClass('toggled');
                        }, 400);

                        mobile_menu_visible = 0;
                    } else {
                        setTimeout(function() {
                            $toggle.addClass('toggled');
                        }, 430);

                        var main_panel_height = $('.main-panel')[0].scrollHeight;
                        var $layer = $('<div class="close-layer"></div>');
                        $layer.css('height', main_panel_height + 'px');
                        $layer.appendTo(".main-panel");


                        setTimeout(function() {
                            $layer.addClass('visible');
                        }, 100);

                        $layer.on('click', function() {
                            $html.removeClass('nav-open');
                            mobile_menu_visible = 0;

                            $layer.removeClass('visible');

                            setTimeout(function() {
                                $layer.remove();
                                $toggle.removeClass('toggled');

                            }, 400);
                        });

                        $html.addClass('nav-open');
                        mobile_menu_visible = 1;

                    }
                });

                toggle_initialized = true;
            }

        },

        initBootstrapNavbarMenu: debounce(function() {

            if (!bootstrap_nav_initialized) {
                var $navbar = $('nav').find('.navbar-collapse').first().clone(true);

                var nav_content = '';
                var mobile_menu_content = '';

                //add the content from the regular header to the mobile menu
                $navbar.children('ul').each(function() {
                    var content_buff = $(this).html();
                    nav_content = nav_content + content_buff;
                });

                nav_content = '<ul class="nav nav-mobile-menu">' + nav_content + '</ul>';

                $navbar.html(nav_content);
                $navbar.addClass('off-canvas-sidebar');

                // append it to the body, so it will come from the right side of the screen
                $body.append($navbar);

                var $toggle = $('.navbar-toggle');

                $navbar.find('a').removeClass('btn btn-round btn-default');
                $navbar.find('button').removeClass('btn-round btn-fill btn-info btn-primary btn-success btn-danger btn-warning btn-neutral');
                $navbar.find('button').addClass('btn-simple btn-block');

                $toggle.on('click', function() {
                    if (mobile_menu_visible === 1) {
                        $html.removeClass('nav-open');

                        $('.close-layer').remove();
                        setTimeout(function() {
                            $toggle.removeClass('toggled');
                        }, 400);

                        mobile_menu_visible = 0;
                    } else {
                        setTimeout(function() {
                            $toggle.addClass('toggled');
                        }, 430);

                        var $layer = $('<div class="close-layer"></div>');
                        $layer.appendTo(".wrapper-full-page");

                        setTimeout(function() {
                            $layer.addClass('visible');
                        }, 100);


                        $layer.on('click', function() {
                            $html.removeClass('nav-open');
                            mobile_menu_visible = 0;

                            $layer.removeClass('visible');

                            setTimeout(function() {
                                $layer.remove();
                                $toggle.removeClass('toggled');

                            }, 400);
                        });

                        $html.addClass('nav-open');
                        mobile_menu_visible = 1;

                    }

                });
                bootstrap_nav_initialized = true;
            }
        }, 500),
    }


    // Returns a function, that, as long as it continues to be invoked, will not
    // be triggered. The function will be called after it stops being called for
    // N milliseconds. If `immediate` is passed, trigger the function on the
    // leading edge, instead of the trailing.

    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            }, wait);
            if (immediate && !timeout) func.apply(context, args);
        };
    };

})();