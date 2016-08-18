        function makeMoney(){

                $(".money-value").maskMoney({symbol:'R$ ',
                showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
                $(".total-result").maskMoney({symbol:'R$ ',
                showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
            }

            function makeResultMoney(){
                $(".total-result").maskMoney({symbol:'R$ ',
                showSymbol:true, thousands:'.', decimal:',', symbolStay: true});
            }

            makeMoney();

            $("#add-service").click(function(){
                $(".service-line").first().clone().insertBefore('.linha-final');
                $(".service-line").last().find('input').val('');
                makeMoney();
            });
            var addReal = 0;
            $('.service-table').on('keyup', 'input.money-value', function(){
                var valores = $('.money-value');
                var total = 0;
                var somaCentavos = 0;
                var somaReais = 0;
                $(valores).each(function(index, el) {                    
                    var numero = $(el).val();
                    var numero = numero.slice(3, numero.length);
                    numero == '' ? numero = '0' : numero;
                    var centavos = numero.replace(',', '.');
                    var centavosPos = centavos.length - 2;
                    centavos = centavos.slice(centavosPos, centavos.length);
                    somaCentavos = parseFloat(somaCentavos) + parseFloat(centavos);
                    total = parseFloat(total) + parseFloat(numero);

                });

                    if (somaCentavos > 99) {
                        somaReais = somaCentavos / 100;
                        // var decimalCent = String(somaReais);
                        // decimalCent = decimalCent.split(".");
                        somaReais = parseInt(somaReais);
                        somaCentavos = somaCentavos % 100;
                    }

                somaCentavos == 0 ? somaCentavos = '00' : somaCentavos;
                total = total + somaReais + ','+ somaCentavos;

                $('.total-result').val(total);

            });