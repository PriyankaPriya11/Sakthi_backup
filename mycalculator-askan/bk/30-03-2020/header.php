<amp-sidebar id="mibile_menu" layout="nodisplay" side="right" class="shadow" data-mydop-background-color="" style="background-color:var(--color2);width: 100%;">
  <button style="background:transparent; border:none;font-size:30px;width: 30px;height: 30px; position:absolute; padding:0; top:6px; left:6px;outline: none;" on="tap:mibile_menu.close">✕</button>
  <nav toolbar="(min-width: 1024px)" toolbar-target="navTarg" class="d-flex w100">
    <ul class="Mt50" style="list-style: none; padding:0; position:relative; z-index:2;">
     <li >
        <a href="index.php">Percentage Calculators</a>
      </li>
      <li >
        <a href="percent-change-calculator.php">Percent Change</a>
      </li>
      <li >
        <a href="percent-difference.php">Percent Difference</a>
      </li>
      <li >
        <a href="discount-calculator.php">Discount Calculator</a>
      </li>
      <li >
        <a href="tip-calculator.php">Tip Calculator</a>
      </li>
      <li >
        <a href="final-grade-calculator.php">Grade Calculator</a>
      </li>
      <li >
        <a href="paycheck-calculator.php">Salary Calculator</a>
      </li>
	  <li >
		  <a href="loan-calculator.php">Loan Calculator</a>
		</li>
      <li >
        <a href="index-ar.php">Arabic</a>
      </li>
    </ul>
  </nav>
</amp-sidebar>
<header class="header">
    <div class="row d-flex" style="position:relative;">
      <div class="col2">
        <a href="index.php" class="heartBeat logo">
          <amp-img src="images/logo.png" width="120" height="85" layout="fixed" alt="logo" style="width: 90px; height: 64px;">
          </amp-img></a>
        
      </div>
      <div class="col10 d-flex" id="navTarg" style=""></div>
      <div class="responisve_menu_button">
        <button on="tap:mibile_menu.toggle" class="nav_button hamburger navigation_wrapper">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
</header>