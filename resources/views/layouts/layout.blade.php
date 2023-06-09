

<style>
.navbar {
  background-color: #25283D;
  color: #ffffff;
  border-radius: 4px;
  width: 100vw;
  max-width: 820px;
  margin: 20px auto 0;
}

.navbar .menu {
  display: flex;
  position: relative;
}

@media (max-width: 820px) {
  .navbar .menu {
    display: block;
    position: relative;
  }
}

.navbar .menu li {
  flex: 1;
  display: flex;
  text-align: center;
  transition: background-color 0.5s ease;
}

.navbar .menu a {
  flex: 1;
  justify-content: center;
  display: inline-flex;
  color: #ffffff;
  text-decoration: none;
  padding: 20px;
  position: relative;
}

.navbar .menu a > .fa {
  font-weight: bold;
  margin-left: 8px;
}

.navbar .menu li:hover {
  background-color: #8F3985;
}

.navbar .menu li:hover .container {
  display: flex;
}

@media (max-width: 820px) {
  .navbar .menu li:hover .container {
    display: none;
  }
  
  .fa-angle-down {
    display: none;
  }
}

a.hasDropdown:after {
  position: absolute;
  bottom: -16px;
  left: 50%;
  transform: translateX(-50%);
  height: 0;
  width: 0;
  border: 8px solid transparent;
  border-top-color: #25283d;
  z-index: 2;
}

li:hover a.hasDropdown:after {
  content: '';
  border-top-color: #8F3985;
}

@media (max-width: 820px) {
  li:hover a.hasDropdown:after {
    display: none;
  }
}
</style>

<head>
<nav class="navbar">
  <ul class="menu">
    <li>
      <a class="hasDropdown" href="#">Electronics <i class="fa fa-angle-down"></i></a>

    <!-- Dropdown content here -->
    </li>
    <li>
      <a class="hasDropdown" href="#">Appliances <i class="fa fa-angle-down"></i></a>
     <!-- Dropdown content here -->
    </li>
    <li>
      <a href="#">Kids</a>
    </li>
    <li>
      <a href="#">Men</a>
    </li>
    <li>
      <a href="#">Baby</a>
    </li>
    <li>
      <a href="#">Women</a>
    </li>
    <li>
      <a href="#">Furniture</a>
    </li>
    <li>
      <a href="#">Decors</a>
    </li>
    <ul>
</nav>
<!-- End Navigation Bar -->
    <body>

    </body>
</head>