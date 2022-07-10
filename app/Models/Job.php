<?php
namespace App\Models;

class Job {
  public static function all() {
    return [
      [
          'id' => 1,
          'title' => 'Job One',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
          molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
          numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
          optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
          obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
          nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
          tenetur error, harum nesciunt ipsum debitis quas aliquid.'
      ],
      [
          'id' => 2,
          'title' => 'Job Two',
          'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
          molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
          numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
          optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
          obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
          nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
          tenetur error, harum nesciunt ipsum debitis quas aliquid.'
      ]
      ];
  }

  public static function find($id) {
    $jobs = self::all();

    foreach($jobs as $job) {
      if($job['id'] == $id) {
        return $job;
      }
    }
  }
}