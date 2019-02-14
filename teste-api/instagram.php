<?php


		function getPublicInfo($username) {
		    $url     = sprintf("https://www.instagram.com/$username");
		    $content = file_get_contents($url);
		    $content = explode("window._sharedData = ", $content)[1];
		    $content = explode(";</script>", $content)[0];
		    $data    = json_decode($content);
		    return $data->entry_data->ProfilePage[0]->graphql->user->edge_owner_to_timeline_media->edges;
		}

		$posts = getPublicInfo('cav_rp');

		// https://www.instagram.com/graphql/query/?query_id=17888483320059182&id=2290810176&first=1979060168306072618&after=QVFESWloQ09UUGdNM1BaR3NUTXRhcDdGYVg1OTBYVGtKRmdEbEZQUFVncmlWaVhnN3hnYllqMHJlc3cxWjFDN3d1RFZmMkN2VWdkaTY1c1pJeDZ4Rjhocw==


		foreach ($posts as $post) {

			if ( $post->node->is_video != 1 )	{

				echo '<img src="'.$post->node->thumbnail_resources[3]->src.'"><br><br>';
				echo 'Likes: '.$post->node->edge_liked_by->count.'<br>';
				echo 'Comentários: '.$post->node->edge_media_to_comment->count.'<br>';

			}

		}

		// echo "<pre>";
		// print_r(getPublicInfo('acervoutimura'));
		// echo "</pre>";