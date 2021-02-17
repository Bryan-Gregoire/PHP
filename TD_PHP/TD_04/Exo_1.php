<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<input type="text" id="group" placeholder="Groupe...">
<button>Horaire</button>
<div id="answer"></div>
<script>
    $(document).ready(function() {
        $("button").click(function() {
            let group = $("#group").val();
            $.get("data.php?group=" + group, function(data, status) {
                $("#answer").html(data);
            });
        });
    });
</script>