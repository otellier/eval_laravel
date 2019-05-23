@extends('layouts.site')

@section('content')

            <div class="col-lg-8 col-md-8">

                <!-- POST -->
                <div class="post beforepagination">
                    <div class="topwrap">
                        <div class="userinfo pull-left">
                            <div class="avatar">
                                <img src="{{asset('/images/avatar.jpg')}}" alt="">
                                <div class="status green">&nbsp;</div>
                            </div>

                            
                        </div>
                        <div class="posttext pull-left">
                        <h2>TITRE</h2>
                           <p>MESSAGE</p> 
                    </div>
                        <div class="clearfix"></div>
                    </div>                              
                    <div class="postinfobot">

                       

                        <div class="clearfix"></div>
                    </div>
                </div><!-- POST -->


                <div class="post"></div>

                <div class="post">
                        <div class="topwrap">
                            <div class="userinfo pull-left">
                                <div class="avatar">
                                    <img src="{{asset('/images//avatar3.jpg')}}" alt="">
                                    <div class="status red">&nbsp;</div>
                                </div>

                                
                            </div>
                            <div class="posttext pull-left">
                            <p> MESSAGE commentaire</p>
                                    </div>
                            <div class="clearfix"></div>
                        </div>                              
                        <div class="postinfobot">                  

                            <div class="clearfix"></div>
                        </div>
        </div>


                


             

              
                



           


                <!-- POST -->
                <div class="post">
                <form action="#" class="form" method="#">
                        <div class="topwrap">
                            <div class="userinfo pull-left">
                                
                            <input type="hidden" name="id" value="#">
                                
                            </div>
                            <div class="posttext pull-left">
                                <div class="textwraper">
                                    <div class="postreply">Post a Reply</div>
                                    <textarea name="commentaire" id="reply" placeholder="Type your message here"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>                              
                        <div class="postinfobot">

                          

                          

                            <div class="pull-right postreply">
                                <div class="pull-left"><button type="submit" class="btn btn-primary">Post Reply</button></div>
                                <div class="clearfix"></div>
                            </div>


                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div><!-- POST -->


            </div>
               
@endsection