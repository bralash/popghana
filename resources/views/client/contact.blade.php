@extends('client.layout')
@section('title', 'Contact Us')
@section('color', 'colored-menu')
@section('hero')
	<header class="page-title">
        <div class="container">

            <div class="row">

                <h1>Contact Us</h1>
                <p>Feel free to get in touch</p>

            </div><!-- //row -->
            
        </div><!-- //container -->
        
    </header>

    <div class="pt80">
 
                <div class="container">

                    <div class="row">
                        
                        <div class="mb-sm-40 col-md-4">

                            <div class="icon-box-2">

                                <i class="pe-7s-headphones"></i>
                                <h4>Call us at</h4>
                                <a href="#" class="contact-detail">(+233) 50 498 4357</a>
                                <a href="#" class="contact-detail">(+233) 50 491 9550</a>
                            
                            </div><!-- //icon box -->

                        </div><!-- //col -->

                        <div class="mb-sm-40 col-md-4">

                            <div class="icon-box-2">

                                <i class="pe-7s-mail"></i>
                                <h4>Email Us at</h4>
                                <a href="#" class="contact-detail">info@popmoneymatrix.com</a>
                                <a href="#" class="contact-detail">support@popmoneymatrix.com</a>
                            
                            </div><!-- //icon box -->

                        </div><!-- //col -->

                        <div class="col-md-4">

                            <div class="icon-box-2">

                                <i class="pe-7s-map-marker"></i>
                                <h4>Visit Us at</h4>
                                <a href="#" class="contact-detail">North Industrial Area, <br>Accra</a>
                            
                            </div><!-- //icon box -->

                        </div><!-- //col -->

                    </div><!-- //row -->
                    
                </div><!-- //container -->
                 
    </div>

    <div class="pt80 pb80">

                <div class="container">

                    <div class="row">
                        
                        <h5 class="section-title col-xs-12">Shoot Us a Message</h5>

                        <form action="/contact-form" method="post" class="col-md-6" enctype="multipart/form-data">

                        	{{ csrf_field() }}

                            <div class="field col-sm-6 col-xs-12">
                                <label>Your Name*</label>
                                <input type="text" name="username" required="required">   
                            </div>

                            <div class="field col-sm-6 col-xs-12">
                                <label>Your Email*</label>
                                <input type="email" name="email-address" required="required">   
                            </div>

                            <div class="field col-xs-12">
                                <label>Subject</label>
                                <input type="text" name="subject">   
                            </div>

                            <div class="field col-xs-12">
                                <label>Your Message*</label>
                                <textarea rows="4" type="text" name="message" required="required"></textarea>   
                            </div>

                            <div class="field col-xs-12">
                                <button class="button button-sm button-primary pull-right">Send Message</button>
                            </div>
                        </form>

                        <div class="col-md-6">
                            <p class="mb10">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo consequuntur magni dolores.</p>

                            <p class="mb10">Donec finibus massa elit, non lobortis eros congue sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus non dui sed elit pellentesque venenatis. Ut hendrerit massa nec quam dapibus, congue suscipit ligula ultricies. Vestibulum vel odio eu lacus porttitor consequat. </p>

                            <p>Duis ut consequat erat. Pellentesque nunc nibh, venenatis scelerisque dolor non, rutrum dictum enim. Mauris a efficitur felis, vitae vestibulum quam. Nullam semper nunc vitae lorem pulvinar ullamcorper. Phasellus posuere ipsum ut mollis lacinia. Quisque venenatis magna ut egestas ornare. Aenean vel nisl consectetur, scelerisque mauris at, consectetur sapien. Duis ut erat risus. In sit amet dapibus est.</p>
                        </div>

                    </div><!-- //row -->
                    
                </div><!-- //container -->
                 
            </div>
@stop

