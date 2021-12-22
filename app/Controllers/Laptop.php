<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaptopModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use PhpParser\Node\Stmt\If_;

class Laptop extends Controller
{
    public function survey()
    {
        $data['judul'] = 'Pencarian Laptop';
        $data['subjudul'] = 'Masukkan kriteria laptop anda';
        echo view("survey", $data);
    }

    public function cari()
    {
        if (! $this->validate([
            'budget' => 'required',
            'resolusi' => 'required',
            'layar' => 'required',
            'ram' => 'required',
            'panel' => 'required',
            'cpu' => 'required',
            'gpu' => 'required',
            'kapasitas' => 'required',
            'tipe' => 'required'
        ])) {
            $data['judul'] = 'Pencarian Laptop';
            $data['subjudul'] = 'Data belum lengkap. Silahkan lengkapi data';
            return view('survey', $data);
        }

        $db         = \Config\Database::connect();
        $builder    = $db->table('laptop');
        $request    = service('request');
        $rl01       = $rl02 = $rl03 = $rl04 = $rl05 = $rl06 = $rl07 = $rl08 = $rl09 = $rl10 = $rl11 = $rl12 = $rl13 = $rl14 = $rl15 = $rl16 = $rl17 = $rl18 = $rl19 = $rl20 = $rl21 = $rl22 = $rl23 = $rl24 = $rl25 = $rl26 = $rl27 = $rl28 = $rl29 = $rl30 = $rl31 = $rl32 = $rl33 = $rl34 = $rl35 = $rl36 = $rl37 = $rl38 = $rl39 = $rl40 = false;
        $budget     = $request->getPost('budget');
        $resolusi   = $request->getPost('resolusi');
        $layar      = $request->getPost('layar');
        $ram        = $request->getPost('ram');
        $panel      = $request->getPost('panel');
        $cpu        = $request->getPost('cpu');
        $gpu        = $request->getPost('gpu');
        $kapasitas  = $request->getPost('kapasitas');
        $tipe       = $request->getPost('tipe');
        $lp         = array("");

        switch ($budget) {
            case '5000000':
                $rl01 = true;
                break;
            case '6000000':
                $rl02 = true;
                break;
            case '7000000':
                $rl03 = true;
                break;
            case '8000000':
                $rl04 = true;
                break;
            case '9000000':
                $rl05 = true;
                break;
            case '10000000':
                $rl06 = true;
                break;
            case '15000000':
                $rl07 = true;
                break;
            case '500000000':
                $rl08 = true;
                break;
            default:
                # code...
                break;
        }

        switch ($resolusi) {
            case 'hd':
                $rl12 = true;
                break;
            case 'fhd':
                $rl13 = true;
                break;
            case 'qhd':
                $rl14 = true;
                break;
            case 'uhd':
                $rl15 = true;
                break;
            default:
                # code...
                break;
        }

        switch ($layar) {
            case '13':
                $rl16 = true;
                break;
            case '15':
                $rl17 = true;
                break;
            case '17':
                $rl18 = true;
                break;
            default:
                # code...
                break;
        }

        switch ($ram) {
            case '4':
                $rl19 = true;
                break;
            case '8':
                $rl20 = true;
                break;
            case '16':
                $rl21 = true;
                break;
            default:
                # code...
                break;
        }

        switch ($panel) {
            case 'ips':
                $rl09 = true;
                break;
            case 'va':
                $rl10 = true;
                break;
            case 'tn':
                $rl11 = true;
                break;
            default:
                # code...
                break;
        }

        switch ($cpu) {
            case 'entry':
                $rl25 = true;
                break;
            case 'rendah':
                $rl26 = true;
                break;
            case 'sedang':
                $rl27 = true;
                break;
            case 'tinggi':
                $rl28 = true;
                break;
            case 'top':
                $rl29 = true;
                break;
            default:
                # code...
                break;
        }

        switch ($gpu) {
            case 'integrated':
                $rl30 = true;
                break;
            case 'rendah':
                $rl31 = true;
                break;
            case 'sedang':
                $rl32 = true;
                break;
            case 'tinggi':
                $rl33 = true;
                break;
            default:
                # code...
                break;
        }

        switch ($kapasitas) {
            case '128':
                $rl34 = true;
                break;
            case '240':
                $rl35 = true;
                break;
            case '500':
                $rl36 = true;
                break;
            case '1000':
                $rl37 = true;
                break;
            default:
                # code...
                break;
        }

        switch ($tipe) {
            case 'ssd':
                $rl38 = true;
                break;
            case 'hdd':
                $rl39 = true;
                break;
            case 'emmc':
                $rl40 = true;
                break;
            default:
                # code...
                break;
        }
        // budget AND resolusi AND Ukuran AND ram AND panel AND cpu AND gpu AND kapasitas AND tipe penyimpanan
        if ($rl01 and $rl09 and $rl16 and $rl13 and $rl25 and $rl20 and $rl34 and $rl40 and $rl30) {
            // KODE LAPTOP
            array_push($lp,"LP01");
        }
        if ($rl01 and $rl11 and $rl16 and $rl13 and $rl25 and $rl19 and $rl35 and $rl38 and $rl30) {
            array_push($lp,"LP02");
        }
        if ($rl03 and $rl10 and $rl17 and $rl12 and $rl26 and $rl19 and $rl37 and $rl39 and $rl30) {
            array_push($lp,"LP03");
        }
        if ($rl01 and $rl09 and $rl17 and $rl14 and $rl26 and $rl19 and $rl35 and $rl39 and $rl30) {
            array_push($lp,"LP04");
        }
        if ($rl03 and $rl11 and $rl17 and $rl12 and $rl25 and $rl19 and $rl35 and $rl38 and $rl30) {
            array_push($lp,"LP05");
        }
        if ($rl03 and $rl09 and $rl17 and $rl13 and $rl25 and $rl19 and $rl36 and $rl38 and $rl30) {
            array_push($lp,"LP06");
        }
        if ($rl06 and $rl09 and $rl18 and $rl13 and $rl26 and $rl20 and $rl36 and $rl38 and $rl30) {
            array_push($lp,"LP07");
        }
        if ($rl06 and $rl09 and $rl17 and $rl13 and $rl26 and $rl20 and $rl36 and $rl38 and $rl30) {
            array_push($lp,"LP08");
        }
        if ($rl06 and $rl09 and $rl18 and $rl13 and $rl27 and $rl20 and $rl36 and $rl38 and $rl30) {
            array_push($lp,"LP09");
        }
        if ($rl06 and $rl09 and $rl17 and $rl13 and $rl26 and $rl20 and $rl36 and $rl38 and $rl30) {
            array_push($lp,"LP10");
        }
        if ($rl05 and $rl09 and $rl17 and $rl13 and $rl26 and $rl20 and $rl36 and $rl38 and $rl30) {
            array_push($lp,"LP11");
        }
        if ($rl08 and $rl09 and $rl17 and $rl14 and $rl28 and $rl21 and $rl36 and $rl38 and $rl30) {
            array_push($lp,"LP12");
        }
        if ($rl08 and $rl09 and $rl18 and $rl13 and $rl28 and $rl21 and $rl36 and $rl38 and $rl32) {
            array_push($lp,"LP13");
        }
        if ($rl08 and $rl09 and $rl17 and $rl13 and $rl27 and $rl21 and $rl36 and $rl38 and $rl33) {
            array_push($lp,"LP14");
        }
        if ($rl08 and $rl09 and $rl17 and $rl13 and $rl28 and $rl21 and $rl36 and $rl38 and $rl32) {
            array_push($lp,"LP15");
        }

        if (count($lp) != 1) {
            $laptop = new LaptopModel();
            $i = 0;
            $data = array();
            $jmlrekom = count($lp);
            foreach ($lp as $kdlp) {
                $query = $builder->getWhere(['kode' => $kdlp]);
                // $data[$i]['laptops'] = $laptop->where('kode',$kdlp);
                // $data = array(
                //     "kode" => $kdlp;
                // )
                // echo "i1= ",$i,"<br>";
                
                foreach ($query->getResult() as $row ) {
                    $data['rekomendasi'][$i]['laptop'] = $row->laptop;
                    $data['rekomendasi'][$i]['harga'] = $row->harga;
                    $data['rekomendasi'][$i]['panel'] = $row->panel;
                    $data['rekomendasi'][$i]['ukuran'] = $row->ukuran;
                    $data['rekomendasi'][$i]['resolusi'] = $row->resolusi;
                    $data['rekomendasi'][$i]['cpu'] = $row->cpu;
                    $data['rekomendasi'][$i]['ram'] = $row->ram;
                    $data['rekomendasi'][$i]['kapasitas'] = $row->kapasitas;
                    $data['rekomendasi'][$i]['tipe'] = $row->tipe;
                    $data['rekomendasi'][$i]['gpu'] = $row->gpu;
                    $data['rekomendasi'][$i]['os'] = $row->os;
                    $data['rekomendasi'][$i]['port'] = $row->port;
                    $data['rekomendasi'][$i]['konektivitas'] = $row->konektivitas;
                    $data['rekomendasi'][$i]['berat'] = $row->berat;
                    
                    $i++;
                }
            }
            $data['judul'] = 'Rekomendasi Kami';
            echo view('rekomendasi', $data);
        }else {
            $data['judul'] = 'Maaf, Kami tidak menemukan rekomendasi yang sesuai.';
            $data['subjudul'] = 'Spesifikasi yang anda pilih mungkin tidak seimbang dan/atau tidak kami rekomendasikan. Silahkan coba konfigurasi yang berbeda.';
            echo view('survey', $data);
        }
    }
}