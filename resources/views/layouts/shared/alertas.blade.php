<script type="text/javascript">

    function alert_cajachica(){
       swal({
        icon : "warning",
        title : " Caja Chica no existe!",
        text : "Debe registrar la cuenta para hacer uso de este modulo.",
        buttons : {
            cancel: {
                text: "Cancelar",
                value : null,
                visible: true,
                closeModal: true,
            },
            confirm: {
                text: "Ir a registrar",
                value: true,
                visible: true,   
            },
             
        },

       }).then(function(confirm){
        if (confirm) {
            window.location="{{ route('cuentas.index') }}";      
          }
       });

    }



    function alert_inventario(){
       swal({
        icon : "info",
        title : "No existe ningun registro!",
        text : "Debe registrar un producto para hacer uso de este modulo.",
        buttons : {
            confirm: {
                text: "OK",
                value: true,
                visible: true,       
            },
             
        },

       });

    }

        function alert_empresa(){
       swal({
        icon : "warning",
        title : "No existe un registro de empresa!",
        text : "Debe registrar para hacer uso de este modulo.",
        buttons : {
            cancel: {
                text: "Cancelar",
                value : null,
                visible: true,
                closeModal: true,
            },
            confirm: {
                text: "Ir a registrar",
                value: true,
                visible: true,   
            },
             
        },

       }).then(function(confirm){
        if (confirm) {
            window.location="{{ route('empresa.create') }}";      
          }
       });

    }
</script>