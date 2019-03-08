<?php

namespace Home\Model;

use Think\Model\RelationModel;

class RelevantModel extends RelationModel
{
    protected $_link = array(

        'Subject' => array(
            'mapping_type' => self::HAS_MANY,
            'foreign_key' => 'sid',
            'class_name' => 'Subject',
            'mapping_name' => 'Subject',
            'mapping_fields' => 'course,score',
//            'mapping_order' => 'score asc',   //desc为降序   asc为升序
        ),

    );

}