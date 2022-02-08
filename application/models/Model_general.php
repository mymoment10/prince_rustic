<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_general extends CI_Model
{
   
    // Read
    public function get($from)
    {
        return $this->db->get($from)->result_array();
    }

    public function getwhere($select, $from, $where)
    {
        $this->db->select($select);
        $this->db->from($from);
        $this->db->where($where);
        return $this->db->get();
    }

    public function get_limit($select, $from, $join, $joinan,  $group, $limit){
        $n = count($join);
        $this->db->select($select);
        $this->db->from($from);
        for($i=0; $i < $n; $i++){
            $this->db->join($join[$i], $joinan[$i]);
        }
        // $this->db->where($where);
        $this->db->group_by($group);
        $this->db->limit($limit);
        return $this->db->get();
    }

    public function get_detail($select, $from, $join, $joinan, $group, $where)
    {
        $n = count($join);
        $this->db->select($select);
        $this->db->from($from);
        for ($i = 0; $i < $n; $i++) {
            $this->db->join($join[$i], $joinan[$i]);
        }
        $this->db->where($where);
        $this->db->group_by($group);
        // $this->db->limit($limit);
        return $this->db->get();
    }

    public function get_all_join($select, $from, $join, $joinan, $group)
    {
        $n = count($join);
        $this->db->select($select);
        $this->db->from($from);
        for ($i = 0; $i < $n; $i++) {
            $this->db->join($join[$i], $joinan[$i]);
        }
        $this->db->group_by($group);
        // $this->db->limit($limit);
        return $this->db->get();
    }

    // Create
    public function create($table, $data)
    {
        $this->db->insert($table, $data);
    }

    // Update
    public function update($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }


    // Delete
    public function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // Counter
    public function sum_data($table)
    {
        return $this->db->count_all($table);
    }

    // Counter
    public function sum_where($table, $where, $present)
    {
        $this->db->like($where, $present);
        return $this->db->count_all_results($table);
    }

}