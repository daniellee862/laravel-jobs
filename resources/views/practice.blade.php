{{-- <h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
 <h2><?php echo $listing['title']; ?></h2>
 <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?> --}}

{{-- 
we can clean up this code by using blade syntax and directives - 
it is similar to JSX or an Angular or Vue template  --}}


{{-- @if(count($listings) == 0)
<p>No listings found</p>
@endif --}}