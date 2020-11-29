
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="TalentsCrew" />
<meta name="author" content="TalentsCrew" />
<meta name="copyright" content="TalentsCrew" />
<meta charset="utf-8">
<title>Dashboard - Talents Jobs</title>
<meta name="generator" content="Jobgator 1.0" /><meta name="author" content="TalentsCrew.com - The Jobs Explorer" /><meta name="copyright" content="TalentsCrew.com - The Jobs Explorer" /><meta name="description" content="Dashboard - TalentsCrew" /><meta name="keywords" content="Dashboard - TalentsCrew" />
<meta property="og:url" content="https://talentscrew.com/Dashboard" /><meta property="og:title" content="Dashboard - TalentsCrew" /><meta property="og:locale" content="en_US" /><meta property="og:type" content="article" /><meta property="og:image" content="https://talentscrew.com/themes-nct/images/tc_link_logo3.jpg" /><meta property="og:image:alt" content="TalentsCrew Logo" /><meta property="og:description" content="Dashboard - TalentsCrew" />
<meta http-equiv = "content-language" content = "en">
<meta name="google-site-verification" content="YhxkkoMycFmOJPpFfeysBIbIo7AdPdQkr2cEb-4AM4k" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@TC_Jobportal" />
<meta name="twitter:creator" content="@TC_Jobportal" />

<link rel="canonical" href="https://talentscrew.com/seeker-dashbord">
<link rel="shortcut icon" type="image/png" href="http://talentsjobs.in/assets/front/images/header/favicon.ico" />  
 
<!--- <div class="loading-page">Loading&#8230;</div>-->
 <script type="text/javascript" src="https://talentscrew.com/includes-nct/javascript-nct/jquery-1.11.1.min.js"></script>
 
 <!-----------chat all assets------------>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <!-----------chat all assets------------>
 
 
<script rel="" src="<?php echo base_url('assets/');?>js/sweetalert.min.js"></script>
<script rel="" src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
 </head>
 
<style>

	body,html{
			<!--height: 100%;-->
			margin: 0;
			background: #7F7FD5;
	        background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
	        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
		}

		.chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		.card{
			height: 500px;
			border-radius: 15px !important;
			background-color: rgba(0,0,0,0.4) !important;
		}
		.contacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}
	 .card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
	}
		.container{
			align-content: center;
		}
		.search{
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
		}
		.search:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.type_msg{
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
			.type_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.attach_btn{
		border-radius: 15px 0 0 15px !important;
		background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
		border-radius: 0 15px 15px 0 !important;
		background-color: rgba(0,0,0,0.3) !important;
		border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.search_btn{
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.contacts{
			list-style: none;
			padding: 0;
		}
		.contacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}
		.active{
				background-color: rgba(0,0,0,0.3);
		}
		.user_img{
			height: 70px;
			width: 70px;
			border:1.5px solid #f5f6fa;
		
		}
		.user_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.img_cont{
			position: relative;
			height: 60px;
			width: 60px;
	}
	.img_cont_msg{
			height: 40px;
			width: 40px;
	}
	.online_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.offline{
		background-color: #c23616 !important;
	}
	.user_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.user_info span{
		font-size: 20px;
		color: white;
	}
	.user_info p{
	font-size: 10px;
	color: rgba(255,255,255,0.6);
	}
	.video_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.video_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
	}
	.msg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 25px;
		background-color: #82ccdd;
		padding: 10px;
		position: relative;
	}
	.msg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #78e08f;
		padding: 10px;
		position: relative;
	}
	.msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_head{
		position: relative;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}
</style>
 <body>
 <?php $this->load->view('common/header');   ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
	
	<div class="page-wrap">
	<div class="clearfix"></div>
	<!-- jp Tittle Wrapper Start -->
	<div class="1container">
	<!--Coded With Love By Mutiullah Samim-->
		<br>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat">
				<div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					
					<div class="card-body contacts_body">
						<ui class="contacts">
							<span class="show">
							</span>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div>
				</div>
				<div class="col-md-8 col-xl-6 chat" style="display:none;">
					<div class="card">
						<div id="showheader"></div>
						
						<div class="card-body msg_card_body">
							<div id="showchat"></div>
						</div>
						
						<div class="card-footer">
							<div class="input-group">
								<form id="savechat" class="input-group-append input-group">
									<div class="input-group-append">
										<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
									</div>
									<textarea name="message" id="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
									<input type="hidden" id="empid" name="empid" >
									<input type="hidden" id="candid" name="candid">
									<div class="input-group-append">
										<button class="input-group-text send_btn" type="submit"  id="btnSave"><i class="fas fa-location-arrow"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
</div>
<!-- jp profile Wrapper End -->
<!-- jp downlord Wrapper End -->
<!-- jp Newsletter Wrapper End -->
		
<script>
$(document).ready(function(){
	
		function getcandidate()
		{
			$.ajax({  
				url:"<?php echo base_url(); ?>Home/getcandidate",   
				method:"POST",  
				//data:new FormData(this),  
				contentType: true,  
				cache: true,  
				processData:true,  
				dataType:'json',
				beforeSend:function(){ },
				success:function(res)  
				{
					var html ='';
					var i=0;
					for(i=0;i<res.length;i++)
					{
						if(res[i].login_status=='1')
						{
							html +='<li class=""><div class="d-flex bd-highlight"><div class="img_cont"><a style=" text-decoration: none;" class="gtchat" data-id="'+res[i].empid+'" data-candid="'+res[i].candid+'" href="javascript:void(0)">'+
							res[i].image+'<span class="online_icon"></span><span class="online_icon"></span></div>'+	
							'<div class="user_info"><span>'+res[i].candiadte + ' <sup style="color:#fff;font-size:bold;background-color:#4cd137; border-radius: 100px;" id="chtcount1">'+res[i].chtcount+' </sup></span><p>'+res[i].candiadte+' is online</p></a></div></div></li>'; 
						}else{
							html +='<li class=""><div class="d-flex bd-highlight"><div class="img_cont"><a style=" text-decoration: none;" class="gtchat" data-id="'+res[i].empid+'" data-candid="'+res[i].candid+'" href="javascript:void(0)">'+
							res[i].image+'<span class="online_icon"></span><span class="online_icon offline"></span></div>'+	
							'<div class="user_info"><span>'+res[i].candiadte + ' <sup style="color:#fff;font-size:bold;background-color:#4cd137; border-radius: 100px;" id="chtcount1">'+res[i].chtcount+'</sup></span><p>'+res[i].candiadte+' is offline</p></a></div></div></li>'; 
						}
					}
					$('.show').html(html);
				}  
			});
		}  getcandidate();
		
		setInterval(function(){ 
			getcandidate();
		}, 8000);		
		
		
		$(document).on('click','.gtchat',function(){
		    
		    $('#chtcount1').html('');
			var empid = $(this).data('id');
			var candid = $(this).data('candid');
				$('#empid').val(empid);
				$('#candid').val(candid);
				$('.chat').show();
			$.ajax({  
					url:"<?php echo base_url(); ?>Home/candchatrec",   
					method:"POST",  
					data:{empid:empid,candid:candid},  
					//contentType: true,  
					cache: true,  
					processData:true,  
					dataType:'json',
					beforeSend:function(){ 
					   Swal.fire({			
    						text: "Please wait...",
    						icon: "info",
    						allowOutsideClick: false,
    						showConfirmButton: true,
				    	});
					},
					success:function(res)  
					{
					    swal.close();
						var html ='';
						var htmll ='';
						var i=0;
						
						    	if(res[i].candidate_send_message=='')
								{
									if(res[i].login_status=='1')
									{
										htmll +='<div class="card-header msg_head">'+
										'<div class="d-flex bd-highlight">'+
										'<div class="img_cont">'+res[i].image+'<span class="online_icon"></span></div>'+
										'<div class="user_info">	<span>'+res[i].candiadte+'</span><p>1767 Messages</p></div>	</div>'+
										'<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span><div class="action_menu"><ul><li><i class="fas fa-user-circle"></i> View profile</li>'+
										'<li><i class="fas fa-users"></i> Add to close friends</li>	<li><i class="fas fa-plus"></i> Add to group</li><li><i class="fas fa-ban"></i> Block</li></ul></div></div>'; 
									
									}else{
									
										htmll +='<div class="card-header msg_head">'+
										'<div class="d-flex bd-highlight">'+
										'<div class="img_cont">'+res[i].image+'<span class="online_icon offline"></span></div>'+
										'<div class="user_info">	<span>'+res[i].candiadte+'</span><p>1767 Messages</p></div></div>'+
										'<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span><div class="action_menu"><ul><li><i class="fas fa-user-circle"></i> View profile</li>'+
										'<li><i class="fas fa-users"></i> Add to close friends</li>	<li><i class="fas fa-plus"></i> Add to group</li><li><i class="fas fa-ban"></i> Block</li></ul></div></div>'; 
									}
								}
							
						
							if(res[i].employee_response_message==''){
								
								if(res[i].login_status=='1')
								{
									htmll +='<div class="card-header msg_head">'+
									'<div class="d-flex bd-highlight">'+
									'<div class="img_cont">'+res[i].image+'<span class="online_icon "></span></div>'+
									'<div class="user_info"><span>'+res[i].candiadte+'</span><p>1767 Messages</p></div>	</div>'+
									'<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span><div class="action_menu"><ul><li><i class="fas fa-user-circle"></i> View profile</li>'+
									'<li><i class="fas fa-users"></i> Add to close friends</li>	<li><i class="fas fa-plus"></i> Add to group</li><li><i class="fas fa-ban"></i> Block</li></ul></div></div>'; 
								}else{
									htmll +='<div class="card-header msg_head">'+
									'<div class="d-flex bd-highlight">'+
									'<div class="img_cont">'+res[i].image+'<span class="online_icon offline"></span></div>'+
									'<div class="user_info"><span>'+res[i].candiadte+'</span><p>1767 Messages</p></div></div>'+
									'<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span><div class="action_menu"><ul><li><i class="fas fa-user-circle"></i> View profile</li>'+
									'<li><i class="fas fa-users"></i> Add to close friends</li>	<li><i class="fas fa-plus"></i> Add to group</li><li><i class="fas fa-ban"></i> Block</li></ul></div></div>'; 
									
								}
							}
					
						for(i=0;i<res.length;i++)
						{
							if(res[i].candidate_send_message=='')
							{
								html +='<div class="d-flex justify-content-end mb-4">'+
								'<div class="msg_cotainer_send">'+res[i].employee_response_message+'<span class="msg_time_send">'+res[i].chat_time+'</span>'+
								'</div>	<div class="img_cont_msg">'+res[i].eimage+'</div></div>';
							
							}
							
							if(res[i].employee_response_message==''){
								
								html +='<div class="d-flex justify-content-start mb-4">'+
								'<div class="img_cont_msg">'+res[i].image+'</div>'+
								'<div class="msg_cotainer">'+res[i].candidate_send_message+' <br /><span class="msg_time">'+res[i].chat_time+'</span></div></div>';
							}
						}
						$('#showchat').html(html);
						$('#showheader').html(htmll);
					}  
				});
			});
				
		$(document).on("submit","#savechat",function(e){
		e.preventDefault();
		if($('#message').val()!='')
		{
			$.ajax({
				url:"<?php echo base_url('Home/empsavechat')?>",
				method:"POST",
				data: new FormData(this),
				contentType:false,
				processData:false,
				dataType:"json",
				beforeSend:function(){ 
				    $('#btnSave').attr('disabled',true);
				},
				success:function(res){
				     $('#btnSave').attr('disabled',false);
					 $('#message').val('');
					//$('#savechat')[0].reset();
					//$('#btnSave').attr('disabled',false);
					var html ='';
					var i=0;
					for(i=0;i<res.length;i++)
					{
							if(res[i].candidate_send_message=='')
							{
								html +='<div class="d-flex justify-content-end mb-4">'+
									'<div class="msg_cotainer_send">'+res[i].employee_response_message+'<span class="msg_time_send">'+res[i].chat_time+'</span>'+
									'</div>	<div class="img_cont_msg">'+res[i].eimage+'</div></div>';
							
							}if(res[i].employee_response_message==''){
								
									html +='<div class="d-flex justify-content-start mb-4">'+
									'<div class="img_cont_msg">	'+res[i].cimage+'</div>'+
									'<div class="msg_cotainer">'+res[i].candidate_send_message+' <br /><span class="msg_time">'+res[i].chat_time+'</span></div></div>';
							}
					}
						$(".msg_card_body").stop().animate({ scrollTop: $(".msg_card_body")[0].scrollHeight}, 1000);
						$('#showchat').html(html);
					}
				});
		}else{
			alert('empty');
		}
		});

		setInterval(function(){ 
				var empid = $('#empid').val();
				var candid = $('#candid').val();
				$.ajax({  
					url:"<?php echo base_url(); ?>Home/canlivechat",   
					method:"POST",  
					data:{empid:empid,candid:candid},  
					//contentType: false,  
					//cache: false,  
					//processData:false,  
					dataType:'json',
					success:function(res)  
					{	
						//alert(res);
						var html ='';
						var i=0;
						for(i=0;i<res.length;i++){
							
							if(res[i].candidate_send_message=='')
								{
									html +='<div class="d-flex justify-content-end mb-4">'+
										'<div class="msg_cotainer_send">'+res[i].employee_response_message+'<span class="msg_time_send">'+res[i].chat_time+'</span>'+
										'</div>	<div class="img_cont_msg">'+res[i].eimage+'</div></div>';
								
								}if(res[i].employee_response_message==''){
									
										html +='<div class="d-flex justify-content-start mb-4">'+
										'<div class="img_cont_msg">	'+res[i].cimage+'</div>'+
										'<div class="msg_cotainer">'+res[i].candidate_send_message+' <br /><span class="msg_time">'+res[i].chat_time+'</span></div></div>';
								}
						}
						$(".msg_card_body").stop().animate({ scrollTop: $(".msg_card_body")[0].scrollHeight}, 1000);
						$('#showchat').html(html);
					}  
				});
				
			}, 8000);
		
				
		$(document).on('click','#action_menu_btn',function(){
			$('.action_menu').toggle();
		});
		
		
		$(document).on('click','.gtchat',function(){
			var candid = $(this).data('candid');
			$.ajax({  
					url:"<?php echo base_url(); ?>Home/chatseenstatus",   
					method:"POST",  
					data:{candid:candid},  
					//contentType: false,  
					//cache: false,  
					//processData:false,  
					dataType:'json',
					beforeSend:function(){ 	},
					success:function(res)  
					{
						alert(res);
					}  
				});
			});
	
	
});
</script>
   <?php $this->load->view('common/footer'); ?>