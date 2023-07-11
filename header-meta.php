<link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" >
<link rel="schema.DC" href="http://purl.org/DC/elements/1.0/">
<meta name="DC.title" content="<?php the_title(); ?>" />
<meta name="DC.subject" content="<?php the_excerpt(); ?>" />
<meta name="DC.creator" content="<?php echo strip_tags(get_the_term_list( $post->ID, 'Autores', ' ',', ')); ?>" />
<meta name="DC.identifier" content="<?php echo get_post_meta($post->ID, 'isbn', true); ?>" />
<meta name="DC.type" content="book" />
<meta name="DC.identifier" scheme="DOI" content="<?php echo get_post_meta($post->ID, 'doi', true); ?>" />
<meta name="DC.accessRights" content="public" />