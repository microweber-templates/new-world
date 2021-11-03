<?php if ($header_posts == 'true'): ?>
    <div class="header-posts-holder">
        <div class="posts-menu js-posts-menu">
            <div class="container p-t-40 p-b-40">
                <div class="row">
                    <div class="col-lg-3 position-relative posts-title">
                        <h3>The last from<br/>blog here</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="btn-posts text-end text-right d-block d-lg-none">
                            <a href="javascript:;" class="btn btn-primary js-show-posts">Close <span class="fas fa-times"></span></a>
                        </div>

                        <module type="posts" template="header-posts" limit="6"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
