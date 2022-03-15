    function main()
    {
        var btn_roductos=$("#productos")[0];
        var btn_vendedor=$("#vendedor")[0];
        var btn_nuvoVendedor=$("#nuvoVendedor")[0];
        var usuario=$("#usuario")[0];
        var id_persona=$("#id_persona")[0];
        var id_producto=$("#id_producto")[0];
        var user;

        var productoAcomprar = [];
        var btn_comprar = $("#btn_comprar")[0];
        var compra_id_producto=$("#compra_id_producto")[0];
        var compra_btn_producto=$("#compra_btn_producto")[0];
          try
        {
            
            if (usuario === undefined) {
               user=usuario;
            }
            else
            {
                user=sessionStorage.getItem('u', usuario);
            }
            window.onbeforeunload = function(e) {
                sessionStorage.setItem('u', usuario);
            };
            if($(usuario).val()!="1234567890"){
                $(btn_roductos).attr("hidden","true");
                $(btn_vendedor).attr("hidden","true");
                $(btn_nuvoVendedor).attr("hidden","true");
            }
            $('.checBoxProducto').change(function() {
                if(this.checked)
                {
                    productoAcomprar.push($(id_producto));
                }
                else
                {
                    productoAcomprar.splice(productoAcomprar.indexOf(id_producto), 1);
                }   
                alert("Array: "+ productoAcomprar.length+"  Add: "+$(id_producto).val());  
                });

            $(btn_comprar).click(function()
            {
                for(var i in productoAcomprar){
                    alert("id_producto: "+productoAcomprar[i].length);

                        $.ajax({
                        type: "POST",
                        url: "producto_persona.php",
                        data: {id_persona:$(id_persona).val(), id_producto:$(id_producto).val()}
                    });
                }
            });
        }
        catch(e)
        {
            alert(e);
        }

    }

    main();