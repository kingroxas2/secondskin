<!DOCTYPE html>
<html>
<head>
	<title>Web SQL Database with HTML and Javascript</title>
<meta name="viewport" content="user-scalable=no,width=device-width"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body style="margin:30px">

	<h1>Food List</h1>

<div class="container">
	
<div class="row">
<form>
	<fieldset>
		<legend>Food Name</legend>
		<input type="text" class="form-control" name="" id="item">

		<legend>Category</legend>
		<input type="text" class="form-control" id="category" name="">

		<legend>Price</legend>
		<input type="number" class="form-control" id="price" name="">

		
<br>
<button type="button" id="insert" class="btn btn-success">Insert</button>

<button type="button" id="create" class="btn btn-success">Create Table</button>

<button type="button" id="remove" class="btn btn-danger">Delete Table</button>

<button type="button" id="list" class="btn btn-success">Fetch Record</button>


</form>

<hr>
<h4>Record</h4>
<table class="table table-bordered table-hover" id="itemlist">
	
</table>




</div>

</div>



<script type="text/javascript">

var db=openDatabase("itemDB","1.0","itemDB",65535); // itemDB is the database name


$(function(){

loadData(); //loading our records



//CREATING TABLE STARTS HERE

$("#create").click(function(){
db.transaction(function(transaction){
	var sql="CREATE TABLE items "+
	"(id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,"+
	"item VARCHAR(100) NOT NULL,"+
	"category VARCHAR(100) NOT NULL,"+
	"price INT(5) NOT NULL)";
	transaction.executeSql(sql,undefined,function(){
		alert("Table is created successfully");
	},function(){
		alert("Table is already being created");
	})
});
});
// CREATING TABLE ENDS HERE



//DELETING TABLE STARTS HERE
$("#remove").click(function(){

if(!confirm("Are you sure to delete this table?","")) return;;
db.transaction(function(transaction){
	var sql="DROP TABLE items";
	transaction.executeSql(sql,undefined,function(){
		alert("Table is deleted successfully")
	},function(transaction,err){
		alert(err.message);
	})
});
});
//DELETING TABLE ENDS HERE


//INSERTING DATA INTO TABLE

$("#insert").click(function(){
var item=$("#item").val();
var category=$("#category").val();
var price=$("#price").val();
db.transaction(function(transaction){
var sql="INSERT INTO items(item,category,price) VALUES(?,?,?)";
transaction.executeSql(sql,[item,category,price],function(){
	alert("New item is added successfully");
},function(transaction,err){
	alert(err.message);
})
})
})
//INSERTING DATA ENDS HERE


//FETCHING OUR RECORD
$("#list").click(function(){
loadData();
})



//FUNCTION TO LOAD OUR RECORDS
function loadData(){
		$("#itemlist").children().remove();
	db.transaction(function(transaction){
		var sql="SELECT * FROM items ORDER BY id DESC";
		transaction.executeSql(sql,undefined,function(transaction,result){
if(result.rows.length){

for(var i=0;i<result.rows.length;i++){
	var row=result.rows.item(i);
	var item=row.item;
	var category=row.category;
	var id=row.id;
	var price=row.price;
	$("#itemlist").append('<tr><td>'+"Food ID"+'</td><td>'+"Food Name"+'</td><td>'+"Category"+'</td><td>'+"Price"+'</td></tr>');
	$("#itemlist").append('<tr id="del'+id+'"><td>'+"F"+id+'</td><td>'+item+'</td><td>' +category+'</td><td id="newqty'+id+'">'+"RM "+price+'</td><td><a href="#" class="btn btn-danger deleteitem" data-id="'+id+'">Delete</a> <a href="#" class="btn btn-primary updateitem" data-id="'+id+'">Update</a></td></tr>');
}
}else{
	$("#itemlist").append('<tr><td colspan="4" align="center">No Item Found</td></tr>');
}
		},function(transaction,err){
			alert('No table found. Click on "Create Table" to create table now');
		})
	})




//setTimeout was used to execute codes inside it to be loaded after records are loaded/fetched.

setTimeout(function(){
	$(".deleteitem").click(function(){
var sure=confirm("Are you sure to delete this item?");
if(sure===true){
	var id=$(this).data("id");
db.transaction(function(transaction){
var sql="DELETE FROM items where id=?";
transaction.executeSql(sql,[id],function(){
	$("#del"+id).fadeOut();
	alert("Item is deleted successfully");
},function(transaction,err){
	alert(err.message);
})
});
}
})

$(".updateitem").click(function(){
var qty=prompt("Kindly enter new price",1);
if(qty!==null){
	var id=$(this).data("id");
db.transaction(function(transaction){
var sql="UPDATE items SET price=? where id=?";
transaction.executeSql(sql,[qty,id],function(){
	$( "RM "+"#newqty"+id).html(qty);
	alert("Item is updated successfully");
},function(transaction,err){
	alert(err.message);
})
});
}
})

},1000);


}
//END OF loadData() function




});










</script>


</body>
</html>