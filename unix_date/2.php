<html>
<body>

<input type="text" name="user1" onblur="fun_zhuce('user')">
<div id="user" style="width:130px; height:15px; float:right" >
<br />
</div><br />

</body>

<script>

function fun_zhuce(name)
{
byphp(name);

}

function byphp(name)
{
    var name_id = name;
    alert(name);    //得到 name 值
    var php =  "dddd";
    document.getElementById(name_id).innerHTML = php;
}
</script>
</html>