@extends('user.header')

@section('home')
<article class="blog-post px-3 py-5 p-md-5">
    <div class="container">
        <h1>Author: {{$user->name}}</h1>
        <header class="blog-post-header">
            <h1 class="title mb-2">{{$article->title}}</h1>
            <div class="meta mb-3"><span class="date">{{$article->created_at}}</span><span class="time">5 min
                    read</span><span class="comment"><a href="#">4 comments</a></span></div>
        </header>

        <div class="blog-post-body">
            <figure class="blog-banner">
                <a href="https://made4dev.com"><img class="img-fluid" src="{{url('')}}/uploads/{{$article->image}}" alt="image"></a>
                <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="https://made4dev.com?ref=devblog" target="_blank">Nhom 3</a></figcaption>
            </figure>
            <p>{{$article->content}} </p>

            <h3 class="mt-5 mb-3">Code Block Example</h3>
            <p>You can get more info at <a href="https://highlightjs.org/" target="_blank">https://highlightjs.org/</a>.
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam
                felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede
                justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                consequat vitae, eleifend ac, enim. </p>

            <h3 class="mt-5 mb-3">Typography</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <h5 class="my-3">Bullet Points:</h5>
            <ul class="mb-5">
                <li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
                <li class="mb-2">Aenean commodo ligula eget dolor.</li>
                <li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
            </ul>
            <ol class="mb-5">
                <li class="mb-2">Lorem ipsum dolor sit amet consectetuer.</li>
                <li class="mb-2">Aenean commodo ligula eget dolor.</li>
                <li class="mb-2">Aenean massa cum sociis natoque penatibus.</li>
            </ol>


            <h5 class="mb-3">Embed A Tweet:</h5>

            <blockquote class="twitter-tweet" data-lang="en">
                <p lang="en" dir="ltr">1969:<br>-what&#39;re you doing with that 2KB of RAM?<br>-sending people to the
                    moon<br><br>2017:<br>-what&#39;re you doing with that 1.5GB of RAM?<br>-running Slack</p>&mdash; I
                Am Devloper (@iamdevloper) <a href="https://twitter.com/iamdevloper/status/926458505355235328?ref_src=twsrc%5Etfw">November 3,
                    2017</a>
            </blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>



            <h3 class="mt-5 mb-3">Video Example</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </p>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hnCmSXCZEpU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
        <hr>
        <div class="blog-comments-section">
            <div class="container">
                <span class="success" style="color:green; margin-top:10px; margin-bottom: 10px;"></span>
                <h3>All Comment</h3>
                <div class="item-chat border border-secondary p-2">
                
                    @if($data != null)
                    <?php for ($i=0; $i < count($data['name']); $i++) { 
                    ?>
                    <div class="comments"><b><u>{{$data['name'][$i]}}</u></b>: {{$data['comment'][$i]}} <span class="small text-primary ml-1"><i></i></span></div>
                    <?php } ?>
                    @else
                    @endif
                </div>
                <form id="ajaxform">
                    <div class="form-group">
                        <label>Comment:</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your Comment" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success save-data">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div id="disqus_thread"></div> -->
        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
             *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
             *  PLATFORM OR CMS.
             *  
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
             *  https://disqus.com/admin/universalcode/#configuration-variables
             */
            /*
            var disqus_config = function () {
                // Replace PAGE_URL with your page's canonical URL variable
                this.page.url = PAGE_URL;  
                
                // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                this.page.identifier = PAGE_IDENTIFIER; 
            };
            */

            (function() { // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                var d = document,
                    s = d.createElement('script');

                // IMPORTANT: Replace 3wmthemes with your forum shortname!
                s.src = 'https://3wmthemes.disqus.com/embed.js';

                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>
            Please enable JavaScript to view the
            <a href="https://disqus.com/?ref_noscript" rel="nofollow">
                comments powered by Disqus.
            </a>
        </noscript>
    </div>
    <!--//blog-comments-section-->

    </div>
    <!--//container-->
</article>
<!--//promo-section-->

@endsection