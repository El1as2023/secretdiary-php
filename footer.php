<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">
    $("#diary").bind("input propertychange", function(){
        $.ajax({
            method: "POST",
            url: "updatedatabase.php",
            data: {content: $('#diary').val()}
            
    });
});
    </script>
</body>
</html>