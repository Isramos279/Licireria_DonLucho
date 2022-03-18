    function main()
    {
        var btn_productos=$("#productos")[0];
        var btn_vendedor=$("#vendedor")[0];
        var btn_nuvoVendedor=$("#nuvoVendedor")[0];
        var usuario=$("#usuario")[0];
        var id_persona=$("#id_persona")[0];

        var id_producto=$("#id_producto")[0];
        var nivel=$("#nivel")[0];
        var user;

        var productoAcomprar = [];
        var btn_comprar = $("#btn_comprar")[0];
        var compra_id_producto=$("#compra_id_producto")[0];
  
          try
        {
            
            if (isset(nivel)) {
               user=nivel;
            }
            else
            {
                user=sessionStorage.getItem('u', nivel);
            }
            if (!isset(id_persona)) {
               // id_persona.val(sessionStorage.getItem('id_persona', id_persona));
                document.getElementById('id_persona').value=sessionStorage.getItem('id_persona', id_persona); 
            }
            window.onbeforeunload = function(e) {
                sessionStorage.setItem('u', nivel);
                sessionStorage.setItem("id_persona",id_persona);
            };  
            cosole.log($(nivel).val());
            if($(nivel).val()!="1"){
                $(btn_productos).attr("hidden","true");
                $(btn_vendedor).attr("hidden","true");
                $(btn_nuvoVendedor).attr("hidden","true");
            }
           /* $('.checBoxProducto').change(function() {
                if(this.checked)
                {
                    productoAcomprar.push($(id_producto));
                }
                else
                {
                    productoAcomprar.splice(productoAcomprar.indexOf(id_producto), 1);
                }   
                alert("Array: "+ productoAcomprar.length+"  Add: "+$(id_producto).val());  
                });*/


        }
        catch(e)
        {
            alert(e);
        }

    }

    main();