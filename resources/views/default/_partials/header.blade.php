<style>
	table{
		border-collapse:collapse;
		width:100%;
	}


	th,td{
		text-align:center;
		padding:5px 0;
	}



	.fixed{
		top:0;
		position:fixed;
		width:auto;
		display:none;
		border:none;
	}
	.nav_menu ul{
		background: #222d32;
		overflow: hidden;
		padding: 0;
	}
	.nav_menu ul li{
		list-style: none;
		float: left;
		padding: 10px 0px;
		text-align: center;
		color: #b8c7ce;
		width: 14%;
	}
	.nav_menu ul li:hover{
		color: #fff;
	}
	.active_menu{
		background: #3c8dbc;
		color: #fff !important;
	}


</style>
{!! app('sleeping_owl.navigation')->render() !!}

