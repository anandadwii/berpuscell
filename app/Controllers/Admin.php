<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrdersModel;
use CodeIgniter\Database\BaseResult;

class Admin extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Welcome back, " . $session->get('username');
        return redirect()->to('/admin/search');
    }
    public function search()
    {
        return view("search_view");
    }
    public function orders()
    {
        $model = new OrdersModel();

        // Load all order data
        $orderData['orders'] = $model->orderBy('invoice', 'DESC')->findAll();
        echo view("orders_view", $orderData);
    }
    public function custsList()
    {
        return view("custs_view");
    }
    public function techsList()
    {
        return view("techs_view");
    }
    public function deleteOrder($invoice = null)
    {
        if ($invoice != null) {
            $model = new OrdersModel();
            $data['orders'] = $model->where('invoice', $invoice)->delete();
            $session = session();
            $session->setFlashdata('pesan', 'Data Sudah Terhapus');

            return redirect()->to(base_url('admin/orders'));
        }
    }
    public function editOrder($invoice = null)
    {
        if ($invoice != null) {
            $model = new OrdersModel();
            $orderData['orders'] = $model->where('invoice', $invoice)->first();
        }

        echo view('order_edit', $orderData);
    }
    public function updateOrder()
    {
        $model = new OrdersModel();
        $invoice = $this->request->getVar("invoice");
        $custname = $this->request->getVar("custname");
        $problem = $this->request->getVar("problem");
        $status = $this->request->getVar("status");
        $datereceived = $this->request->getVar("datereceived");
        $datedone = $this->request->getVar("datedone");
        $session = session();

        if ($status != "") {
            $orderData = [
                'invoice' => $invoice,
                'custname' => $custname,
                'problem' => $problem,
                'status' => $status,
                'datereceived' => $datereceived,
                'datedone' => $datedone
            ];
        }

        if ($model->update($invoice, $orderData)) {
            echo "nyess";
        } else {
            echo "reeee";
        }

        return redirect()->to(base_url('admin/orders/'));
    }
    public function addOrder()
    {
        return view('order_add');
    }
    public function insertOrder()
    {
        function random_str(
            int $length = 64,
            string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
        ): string {
            if ($length < 1) {
                throw new \RangeException("Length must be a positive integer");
            }
            $pieces = [];
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < $length; ++$i) {
                $pieces[] = $keyspace[random_int(0, $max)];
            }
            return implode('', $pieces);
        }

        $model = new OrdersModel();
        $invoice = random_str(12);
        $custname = $this->request->getVar("custname");
        $problem = $this->request->getVar("problem");
        $status = $this->request->getVar("status");
        $session = session();

        if ($status != "") {
            $orderData = [
                'invoice' => $invoice,
                'custname' => $custname,
                'problem' => $problem,
                'status' => $status,
            ];
        }

        if ($model->insert($invoice, $orderData)) {
            echo "nyess";
        } else {
            echo "reeee";
        }

        return redirect()->to(base_url('admin/orders/'));
    }
}
