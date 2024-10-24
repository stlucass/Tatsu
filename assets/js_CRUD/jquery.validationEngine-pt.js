(function ($) {
    $.fn.validationEngineLanguage = function () {
    };
    $.validationEngineLanguage = {
        newLang: function () {
            $.validationEngineLanguage.allRules = {
                "required": { // Adicione suas regras de regex aqui, você pode usar o telefone como exemplo
                    "regex": "none",
                    "alertText": "* Campo obrigatório",
                    "alertTextCheckboxMultiple": "* Selecione uma opção",
                    "alertTextCheckboxe": "* Marque a caixa de seleção"
                },
                "requiredInFunction": {
                    "func": function (field, rules, i, options) {
                        return (field.val() == "test") ? true : false;
                    },
                    "alertText": "* Campo deve ser igual a test"
                },
                "minSize": {
                    "regex": "none",
                    "alertText": "* ",
                    "alertText2": "caracteres ou mais"
                },
                "groupRequired": {
                    "regex": "none",
                    "alertText": "* Você deve preencher um dos campos abaixo"
                },
                "maxSize": {
                    "regex": "none",
                    "alertText": "* ",
                    "alertText2": "caracteres ou menos"
                },
                "min": {
                    "regex": "none",
                    "alertText": "* ",
                    "alertText2": " ou mais"
                },
                "max": {
                    "regex": "none",
                    "alertText": "* ",
                    "alertText2": " ou menos"
                },
                "past": {
                    "regex": "none",
                    "alertText": "* ",
                    "alertText2": " ou anterior"
                },
                "future": {
                    "regex": "none",
                    "alertText": "* ",
                    "alertText2": " ou posterior"
                },
                "maxCheckbox": {
                    "regex": "none",
                    "alertText": "* Você selecionou muitas opções"
                },
                "minCheckbox": {
                    "regex": "none",
                    "alertText": "* ",
                    "alertText2": " ou mais opções"
                },
                "equals": {
                    "regex": "none",
                    "alertText": "* Os valores não são iguais"
                },
                "creditCard": {
                    "regex": "none",
                    "alertText": "* Número de cartão de crédito inválido"
                },
                "phone": {
                    // crédito: jquery.h5validate.js / orefalo
                    "regex": /^([\+][0-9]{1,3}([ \.\-])?)?([\(][0-9]{1,6}[\)])?([0-9 \.\-]{1,32})(([A-Za-z \:]{1,11})?[0-9]{1,4}?)$/,
                    "alertText": "* Número de telefone inválido"
                },
                "email": {
                    // Shamelessly lifted from Scott Gonzalez via the Bassistance Validation plugin http://projects.scottsplayground.com/email_address_validation/
                    "regex": /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d |[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
                    "alertText": "* E-mail inválido"
                },
                "integer": {
                    "regex": /^[\-\+]?\d+$/,
                    "alertText": "* Número inteiro inválido"
                },
                "number": {
                    "regex": /^[\-\+]?((\d+(\.\d*)?)|(\.\d+))$/,
                    "alertText": "* Número inválido"
                },
                "date": {
                    "regex": /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/,
                    "alertText": "* Data inválida"
                },
                "ipv4": {
                    "regex": /^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/,
                    "alertText": "* Endereço IP inválido"
                },
                "url": {
                    "regex": /^(http|https|ftp):\/\/(([A-Z]{1,10}:([0-9a-z]{1,10}\.))+([a-z]{2,6})(:[0-9]{1,5})?\/?)$/i,
                    "alertText": "* URL inválida"
                }
            };
        }
    };
    $.validationEngineLanguage.newLang();
})(jQuery);