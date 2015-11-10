<!doctype html>
<html>
        <head>
        <meta charset="utf-8" />
        <title>jQuery Nxeed Tree Menu Plugin Demo</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.ntm.js"></script>
        
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/theme.css" />
        <style>
           .office_wrap{ margin:10px;min-height:100px;background-color:#f0f0f0;border:1px solid #e4e4e4;box-shadow:1px;}
        </style>
        </head>
        <body>
            
<!-- Modal -->
<div id="designationTreeModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body treewrapper">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <div class="container">
          <div class="row" id="">
              <div class="col-md-3 col-lg-3 office_wrap" style="">
                  <h3>Office 1</h3>
                  <a data-id="1" href="#" class="showModal">View Designation</a>
              </div>
              <div class="col-md-3 office_wrap">
                  <h3>Office 2</h3>
                  <a data-id="2" href="#" class="showModal">View Designation</a>
              </div>
              <div class="col-md-3 office_wrap">
                  <h3>Office 3</h3>
                  <a data-id="3" href="#" class="showModal">View Designation</a>
              </div>
              <div class="col-md-3 office_wrap">
                  <h3>Office 4</h3>
                  <a data-id="4" href="#" class="showModal">View Designation</a>
              </div>
              <div class="col-md-3 office_wrap">
                  <h3>Office 5</h3>
                  <a data-id="5" href="#" class="showModal">View Designation</a>
              </div>
              <div class="col-md-3 office_wrap">
                  <h3>Office 6</h3>
                  <a data-id="6" href="#" class="showModal">View Designation</a>
              </div>
         
          </div>
            <div class="selected">
                <ul class="selectedlist">
                    
                </ul>
            </div>
        </div>
<script type="text/javascript">
            function build_html(data){
                
                          var html = '<ul class="degTree" ><li><a data-id="'+data[0]+'"><input class="check" type="checkbox"/><span class="ofclabel">'+data[1]+'</span></a>';
                           if(data[2].length >0){
                               html+= '<ul>';
                               for(var i=0;i<data[2].length;i++){
                                
                                 if(data[2][i][2].length>0){
                                    html+= build_html(data[2][i]);
                                 }
                                 else{
                                    html+= '<li><a data-id="'+data[2][i][0]+'"><input class="check" type="checkbox"/><span class="ofclabel">'+data[2][i][1]+'</span></a></li>'; 
                                 }
                              
                               
                                }
                                html +='</ul>'; 
                            
                           }
                            
                          html += '</li></ul>';
                          return html;
            }
            $(document).ready(function() {
               $('.degTree').ntm();
               $('.showModal').click(function(e){
                   e.preventDefault();
                   var dataid = $(this).attr('data-id');
                   //alert(dataid);
                   $.ajax({
                    url: 'generateTree.php',
                    type: 'post',
                    data: {'data_id': dataid,'action':'ok'},
                    success: function(data, status) {
                        //console.log(data);
                      data = JSON.parse(data);
                      
                          var html = build_html(data);
                          $('.treewrapper').html(html);
                          $('.degTree').first().addClass('demoTree');
                          $('.demoTree').parent().addClass('tree-menu');
                          $('.tree-menu').ntm();
                          $('#designationTreeModal').modal('show');
                          
                    },
                    error: function(xhr, desc, err) {
                      console.log(xhr);
                      console.log("Details: " + desc + "\nError:" + err);
                    }
                  }); // end ajax call
               });
               $(document).on('click','.demoTree a .check',function(){
                 if($(this).prop('checked')== true){
                   // $('.demoTree a').removeClass('activea');
                    var dataid = $(this).parent().attr('data-id');
                    $(this).parent().addClass('activea');
                    $('.selectedlist').append('<li>'+$(this).siblings('.ofclabel').text()+'</li>');
                 } 
                 else{
                     $(this).parent().removeClass('activea');
                     
                 }
                   
               });
              
            });
        </script>
</body>
</html>
