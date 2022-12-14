
<body onload= "loadDoc()">
<h1>User list</h1>
<ul>
    <li id="username"></li>
    <li id="email"></li>
    <li id="type"></li>
</ul>


<script>
    function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState ==4 && this.status ==200){
        var obj_arr=JSON.parse(this.responseText);
        document.getElementById("username").innerHTML=obj_arr[0].username;
        document.getElementById("email").innerHTML=obj_arr[0].email;
        document.getElementById("type").innerHTML=obj_arr[0].type;
        }
    };
    xhttp.open("GET", "http://localhost:8000/api/users/list", true);
    xhttp.send();
}
</script>
</body>