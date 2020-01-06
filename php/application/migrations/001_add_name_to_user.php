<?php
class Migration_Add_name_to_user extends CI_Migration {

    public function __construct()
    {   
        parent::__construct();
    }

    // アップデート処理
    public function up()
    {   
        $fields = [
            'id'    =>  [ 'type' => 'INT',     'constraint' => '11', 'auto_increment' => true ],
            'name'  =>  [ 'type' => 'VARCHAR', 'constraint' => '100' ],
            'email' =>  [ 'type' => 'VARCHAR', 'constraint' => '100' ]
        ];
        $this->dbforge->add_key('id', true);
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('users', TRUE);
    }   
    
    // ロールバック処理
    public function down()
    {   
        $this->dbforge->drop_table('users');
    }

}