<style>
    .bottom-menu { 
  max-width:100%;
  width:100%;
	position:fixed;
	bottom:0;
	background-color:#FFF;
	display:flex;
  left:0px;
	align-items:center;
	justify-content:space-between;	
	padding-top:5px;
  padding-bottom:5px;
  z-index: 1;
  display: none;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
	}
.bottom-menu a {
  font-family:calibri;
	display:flex;
	flex-direction:column;
	align-items:center;
  flex:1;
	padding:5px;
	color:#949494;
  font-weight:600;
  font-size:12px;
  text-decoration:none;
  transition:all .3s;
  left:0;
}
.bottom-menu a i{
  font-size:18px;
  margin-bottom:5px;
}
.bottom-menu a.sat {  
  background-color:var(--headerbg);
  color:#fff;
  border-radius:100%;
  width:74px;
  height:74px;
  display:flex;
  align-items:center;
  justify-content:center;
  position:absolute;
  left:50%;
  transform:translateX(-50%);
  top:-35px;
  border:6px solid #fff;
}
.bottom-menu a.sat:focus {
  border-color:var(--headerbg);
  color:#fff;
}
/* .bottom-menu .sat_active {
  border-color:#ff3f56;
  color:#fff;
}
.bottom-menu a.active, .bottom-menu a:focus {
  color:#ff3f56;
} */
.bottom-menu .active{
  color:var(--headerbg);
}
.bottom-menu a:last-child{
	margin-right:0;
  	margin-left:0;

	}
span.bosluk {
  flex:1;
}

@media (max-width: 575.98px) { 
    .bottom-menu {
        display: flex;
    }
 }

</style>

<div class="bottom-menu">
  <a href="/quotes" class="{{ Request::is('quotes') ? 'active' : '' }}">
      <i class="fa-solid fa-list"></i>
      Watchlist
  </a>
  <a href="/orders" class="{{ Request::is('orders') ? 'active' : '' }}">
      <i class="fa-solid fa-book"></i>
      Order
  </a>
  <span class="bosluk"></span>
  <a href="/portfolio" class="sat {{ Request::is('portfolio') ? 'sat_active' : '' }}">
      <i class="fa-solid fa-briefcase"></i>
      Portfolio
  </a>
  <a href="/history" class="{{ Request::is('history') ? 'active' : '' }}">
      <i class="fa-solid fa-clock-rotate-left"></i>
      Transaction
  </a>
  <a href="/profile" class="{{ Request::is('profile') ? 'active' : '' }}">
      <i class="fa-regular fa-circle-user"></i>
      Account
  </a>
</div>
