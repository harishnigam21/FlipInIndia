<script>
    function addCart() {
          $.ajax({
            url:"test.php", //the page containing php script
            type: "post", //request type,
            dataType: 'json',
           data: {userToken: "", name: "", email: ""}
            success:function(result){

             console.log(result.abc);
           }
         });
     }
</script>