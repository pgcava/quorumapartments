(function($){
    $(document).ready(function(){
        // Smooth scroll
        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        });

        // Input remove error on keyup
        $('#contactForm').each(function(){
            let inputs = $(this).find('input');
            let textarea = $(this).find('textarea');

            $(inputs).each(function(){
                $(this).on('keyup paste', function(){
                    if($(this).val() !== ''){
                        $(this).parent().removeClass('input-error');
                    }else{
                        $(this).parent().addClass('input-error');
                    }
                });
            });

            $(textarea).on('keyup paste', function(){
                if($(this).val() !== ''){
                    $(this).parent().removeClass('input-error');
                }else{
                    $(this).parent().addClass('input-error');
                }
            });
        });

        // Form clear
        function clearForm(form){
            let inputs = form.find('input'),
                textarea = form.find('input');

            $(inputs).each(function(){
                $(this).val('');
            });

            $(textarea).val('');
        }

        // Form validation
        function validateForm(form){
            let inputs = form.find('input');
            let textarea = form.find('textarea');
            let result = new Array();

            $(inputs).each(function(){
                let name = $(this).attr('name');

                // Remove errors
                $(this).parent().removeClass('input-error');

                if($(this).val() == ''){
                    result.push({name});
                }
            });

            if(textarea.val() == ''){
                let name = $(this).attr('name');
                result.push({name})
            }

            if(result.length !== 0){
                $(result).each(function(key, value){
                    let name = value.name;

                    form.find('input[name="' + name + '"]').parent().addClass('input-error');

                    if(name == 'contactMessage'){
                        form.find('textarea').parent().addClass('input-error');
                    }
                });

                return false;
            }else{
                return true;
            }
        }

        // Form submit
        $('#contactForm').submit(function(e){
            e.preventDefault();

            let form = $(this),
                valid = validateForm(form);
            
            if(valid == true){
                let data = {
                    action: 'contactForm',
                    name: form.find('input[name="contactName"]').val(),
                    surname: form.find('input[name="contactSurname"]').val(),
                    phone: form.find('input[name="contactPhone"]').val(),
                    mail: form.find('input[name="contactMail"]').val(),
                    message: form.find('textarea[name="contactMessage"]').val(),
                }

                console.log(data);

                $.ajax({
                    type: 'POST',
                    url: quorum.ajaxurl,
                    data: data,

                    beforeSend: function(){
                        form.addClass('loading');
                    },
                    success: function(response){
                        form.removeClass('loading');

                        if(response == '1'){
                            form.find('.notice').html('<div class="notice__success"><p>Wiadomość została pomyślnie wysłana!</p></div>');
                            clearForm(form);
                            form.find('button[type="submit"]').attr('disabled', 'disabled');
                        }else{
                            form.find('.notice').html('<div class="notice__error"><p>Wystąpił błąd podczas wysyłania wiadomości, spróbuj ponownie później.</p></div>')
                        }
                    },
                });
            }
        });

        /**
         * Call modal
         */
        function openCallModal(){
            $('body').addClass('no-scroll');
            $('.callModal').addClass('callModal--ready');
            setTimeout(function(){
                $('.callModal').addClass('callModal--active');
            }, 300);
        }
        function closeCallModal(){
            $('body').removeClass('no-scroll');
            $('.callModal').removeClass('callModal--active');
            setTimeout(function(){
                $('.callModal').removeClass('callModal--ready');
            }, 300);
        }

        $('.contactPhone').on('click', function(){
            openCallModal();
        });
        $('.callModal__close').on('click', function(){
            closeCallModal();
        });
        $(document).mouseup(function(e){
            var container = $('.callModal__wrap');
            if (!container.is(e.target) && container.has(e.target).length === 0){
                if($('.callModal').hasClass('callModal--active')){
                    closeCallModal();
                }
            }
        });
    });

    /**
     * Mobile menu
     */
    $(document).ready(function(){
        $('.menu-toggle').on('click', function(){
            $('body').addClass('no-scroll');
            $('.mobileMenu').addClass('mobileMenu--active');
        });
        $('.mobileMenu__close').on('click', function(){
            $('body').removeClass('no-scroll');
            $('.mobileMenu').removeClass('mobileMenu--active');
        });
    });
}(jQuery));