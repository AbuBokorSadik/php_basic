<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;

}

nav img{
    width: 150px;
}

.nav-link{
    flex: 1;
    text-align: right;
}

.nav-link ul li{
    list-style: none;
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}

.nav-link ul li a{
    color: #fff;
    text-decoration: none;
    font-size: 20px;
}

.nav-link ul li::after{
    content: '';
    width: 0%;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.nav-link ul li:hover::after{
    width: 100%;
}

#btn_logout {

font-weight: bold;
font-size: 15px;
width: 10%;
background-color: #4CAF50;
color: black;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}

</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="test.php">Home</a>
  <a href="catagory_list.php">Catagory</a>
  <a href="product_list.php">Product</a>
</div>

<div class="content">
    <form action="login.php">

        <section>
            <nav>
                <div class="nav-link">
                    <ul>
                    <input id="btn_logout" type="submit" name="logout" value="Log out">
                    </ul>
                </div>
            </nav>
        </section>

    </form>
</div>

</body>
</html>
