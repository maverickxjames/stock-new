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
  background-color:#ff3f56;
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
  border-color:#ff3f56;
  color:#fff;
}
.bottom-menu a.active, .bottom-menu a:focus {
  color:#ff3f56;
}
.bottom-menu a:last-child{
	margin-right:0;
  	margin-left:0;

	}
span.bosluk {
  flex:1;
}
</style>


<div class="bottom-menu">
	<a href="/quotes" >
        <i class="fa-solid fa-list"></i>
    Watchlist
  </a>
	<a href="/orders">
        <i class="fa-solid fa-book"></i>
    Order
  </a>
  <span class="bosluk"></span>
  <a href="/portfolio" class="sat">
    <i class="fa-solid fa-briefcase"></i>
      Portfolio
  </a>
  <a href="/history" >
    <i class="fa-solid fa-clock-rotate-left"></i>
      History
  </a>
   <a href="/profile" >
    <i class="fa-regular fa-circle-user"></i>
      Account
  </a>
</div>