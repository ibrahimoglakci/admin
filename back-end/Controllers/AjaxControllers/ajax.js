function formSubmit(formID, buttonID, type) {
        event.preventDefault();
        const form = document.getElementById(formID);
        const spinner = '<span class="spinner-border flex-shrink-0" role="status"><span class="visually-hidden">Loading...</span></span>';
        let formData = new FormData(form);
        formData.append("type", type);
       
        const button = $(buttonID);
        langData = [];
        defaultlang = getCookie("lang");
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        if (type == "general_settings") {
            if (defaultlang == "tr") {
                message = "Bilgiler başarıyla kaydedildi";
                errormessage = "Bilgiler kaydedilirken bir hata ile karşılaşıldı";
                buttonText = "Kaydet";
            }
            else if (defaultlang == "en") {
                message = "Variables saved successfully";
                errormessage = "An error was encountered while saving variables.";
                buttonText = "Save";
            }
            else if (defaultlang == "es") {
                message = "Variables guardadas con éxito";
                errormessage = "Se encontró un error al guardar las variables.";
                buttonText = "Ahorrar";
            }

            $.ajax({
                url: 'back-end/Controllers/AjaxControllers/SettingsController.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    if (response == "ok") {

                        button.prop("disabled", true);
                        button.addClass("btn-load");
                        button.text("");
                        button.append(spinner);
                        setTimeout(function () {
                            Toast.fire({
                                icon: 'success',
                                title: message
                            })
                            setTimeout(function () {
                                button.prop("disabled", false);
                                button.removeClass("btn-load");
                                button.text(buttonText);


                            }, 2000);

                        }, 2000);
                    }
                    else if (response == "error") {


                        button.prop("disabled", true);
                        button.addClass("btn-load");
                        button.text("");
                        button.append(spinner);
                        setTimeout(function () {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: errormessage
                            })
                            button.prop("disabled", false);
                            button.removeClass("btn-load");
                            button.text(buttonText);


                        }, 2000);


                    }
                },
                error: function (xhr) {
                    window.location.href = '/admin/';
                }
            });
        }

        if (type == "hosting_settings") {
            if (defaultlang == "tr") {
                message = "Bilgiler başarıyla kaydedildi";
                errormessage = "Bilgiler kaydedilirken bir hata ile karşılaşıldı";
                buttonText = "Kaydet";
            }
            else if (defaultlang == "en") {
                message = "Variables saved successfully";
                errormessage = "An error was encountered while saving variables.";
                buttonText = "Save";
            }
            else if (defaultlang == "es") {
                message = "Variables guardadas con éxito";
                errormessage = "Se encontró un error al guardar las variables.";
                buttonText = "Ahorrar";
            }

            $.ajax({
                url: 'back-end/Controllers/AjaxControllers/SettingsController.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    if (response == "ok") {

                        button.prop("disabled", true);
                        button.addClass("btn-load");
                        button.text("");
                        button.append(spinner);
                        setTimeout(function () {
                            Toast.fire({
                                icon: 'success',
                                title: message
                            })
                            setTimeout(function () {
                                button.prop("disabled", false);
                                button.removeClass("btn-load");
                                button.text(buttonText);


                            }, 2000);

                        }, 2000);
                    }
                    else if (response == "error") {


                        button.prop("disabled", true);
                        button.addClass("btn-load");
                        button.text("");
                        button.append(spinner);
                        setTimeout(function () {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: errormessage
                            })
                            button.prop("disabled", false);
                            button.removeClass("btn-load");
                            button.text(buttonText);


                        }, 2000);


                    }
                },
                error: function (xhr) {
                    window.location.href = '/admin/';
                }
            });
        }

        if (type == "logo_settings") {

            if (defaultlang == "tr") {
                message = "Logo başarıyla kaydedildi";
                errormessage = "Logo kaydedilirken bir hata ile karşılaşıldı";
                emptymessage = "Lütfen Resim Alanını Boş bırakmayınız";
                buttonText = "Kaydet";
            }
            else if (defaultlang == "en") {
                message = "Logo saved successfully";
                errormessage = "An error was encountered while saving logo.";
                emptymessage = "Please do not leave the image field blank.";
                buttonText = "Save";
            }
            else if (defaultlang == "es") {
                message = "Logo guardadas con éxito";
                errormessage = "Se encontró un error al guardar las logo.";
                emptymessage = "Por favor, no dejes el campo de la imagen en blanco.";
                buttonText = "Ahorrar";
            }



            $.ajax({
                url: 'back-end/Controllers/AjaxControllers/SettingsController.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {


                    if (response == "ok") {

                        button.prop("disabled", true);
                        button.addClass("btn-load");
                        button.text("");
                        button.append(spinner);
                        setTimeout(function () {
                            Toast.fire({
                                icon: 'success',
                                title: message
                            })
                            setTimeout(function () {
                                button.prop("disabled", false);
                                button.removeClass("btn-load");
                                button.text(buttonText);
                                $('#logoInput').val('');

                                $('#empty_mode').prop('selected', true);
                                $('#empty_type').prop('selected', true);
                                window.location.href = '/admin/logo-settings';


                            }, 2000);

                        }, 2000);
                    }
                    else if (response == "error") {


                        button.prop("disabled", true);
                        button.addClass("btn-load");
                        button.text("");
                        button.append(spinner);
                        setTimeout(function () {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: errormessage
                            })
                            button.prop("disabled", false);
                            button.removeClass("btn-load");
                            button.text(buttonText);
                            $('#logoInput').val('');
                            $('#empty_mode').prop('selected', true);
                            $('#empty_type').prop('selected', true);

                        }, 2000);


                    }
                    else if (response == "empty") {

                        Swal.fire({
                            icon: 'info',
                            title: 'Oops...',
                            text: emptymessage
                        })
                    }
                },
                error: function (xhr) {
                    window.location.href = '/admin/';
                }
            });
        }

        if (type == "contact_settings") {

            if (defaultlang == "tr") {
                message = "Bilgiler başarıyla kaydedildi";
                errormessage = "Bilgiler kaydedilirken bir hata ile karşılaşıldı";
                emptymessage = "E-Posta Adresi ve Telefon Numarası Alanlarının Doldurulması Zorunludur!";
                buttonText = "Kaydet";
            }
            else if (defaultlang == "en") {
                message = "Variables saved successfully";
                errormessage = "An error was encountered while saving variables.";
                emptymessage = "E-Mail Address and Telephone Number Fields Must Be Filled!";
                buttonText = "Save";
            }
            else if (defaultlang == "es") {
                message = "Variables guardadas con éxito";
                errormessage = "Se encontró un error al guardar las variables.";
                emptymessage = "¡Deben completarse los campos de dirección de correo electrónico y número de teléfono!";
                buttonText = "Ahorrar";
            }


            $.ajax({
                url: 'back-end/Controllers/AjaxControllers/SettingsController.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {


                    if (response == "ok") {

                        button.prop("disabled", true);
                        button.addClass("btn-load");
                        button.text("");
                        button.append(spinner);
                        setTimeout(function () {
                            Toast.fire({
                                icon: 'success',
                                title: message
                            })
                            setTimeout(function () {
                                button.prop("disabled", false);
                                button.removeClass("btn-load");
                                button.text(buttonText);


                            }, 2000);

                        }, 2000);
                    }
                    else if (response == "error") {


                        button.prop("disabled", true);
                        button.addClass("btn-load");
                        button.text("");
                        button.append(spinner);
                        setTimeout(function () {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: errormessage
                            })
                            button.prop("disabled", false);
                            button.removeClass("btn-load");
                            button.text(buttonText);
                            $('#logoInput').val('');
                            $('#empty_mode').prop('selected', true);
                            $('#empty_type').prop('selected', true);

                        }, 2000);


                    }
                    else if (response == "empty") {

                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: emptymessage
                        })
                    }
                },
                error: function (xhr) {
                    window.location.href = '/admin/';
                }
            });
        }
   
}



function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

