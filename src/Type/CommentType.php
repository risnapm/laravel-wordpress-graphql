<?php

namespace LaravelWordpressGraphQL\Type;


use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class CommentType extends GraphQLType {
	protected $attributes = [
		'name'        => 'Comment',
		'description' => 'A comment'
	];

	public function fields() {
		return [
			'id'           => [
				'type'        => Type::nonNull( Type::string() ),
				'description' => 'The id of the comment'
			],
			'post_id'           => [
				'type'        => Type::nonNull( Type::string() ),
				'description' => 'The id of the comment'
			],
			'author_name'  => [
				'type'        => Type::string(),
				'description' => 'The name of the author'
			],
			'author_email' => [
				'type'        => Type::string(),
				'description' => 'The email of the author'
			],
			'author_url'   => [
				'type'        => Type::string(),
				'description' => 'The url of the author'
			],
			'content'      => [
				'type'        => Type::string(),
				'description' => 'The content of the comment'
			],
			'status'       => [
				'type'        => Type::string(),
				'description' => 'The status of the comment'
			],
			'date'         => [
				'type'        => Type::string(),
				'description' => 'The date of the comment'
			],
		];
	}

	protected function resolveIdField( $root, $args ) {
		return $root->comment_ID;
	}

	protected function resolvePostIdField( $root, $args ) {
		return $root->comment_post_ID;
	}

	protected function resolveAuthorNameField( $root, $args ) {
		return $root->comment_author;
	}

	protected function resolveAuthorEmailField( $root, $args ) {
		return $root->comment_author_email;
	}

	protected function resolveAuthorUrlField( $root, $args ) {
		return $root->comment_author_url;
	}

	protected function resolveContentField( $root, $args ) {
		return $root->comment_content;
	}

	protected function resolveStatusField( $root, $args ) {
		return $root->comment_approved;
	}

	protected function resolveDateField( $root, $args ) {
		return $root->comment_date;
	}
}