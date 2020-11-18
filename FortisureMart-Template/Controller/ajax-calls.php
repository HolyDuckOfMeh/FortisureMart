<script>

    //ajax function to update the card modal info and cart qty indicator
    function ajaxCard(prodCode, prodName, prodImg, prodPrice){
        //ajax function
        $.ajax({
            type:"POST",
            url: "./Controller/ajax-card.php",
            data: "code=" + prodCode + "$name=" + prodName + "&img=" + prodImg + "&price=" + prodPrice,
            success: function(data){
                $("#modal-body ").html(data);
            },
            error: function(data){
                alert('An error occured while trying to add this itme');
            },
            
        });
    }

</script>