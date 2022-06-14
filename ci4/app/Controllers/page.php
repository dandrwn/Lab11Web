<?php
namespace App\Controllers;
class Page extends BaseController
{
public function about()
{
    return view('about', [
        'title' => '',
        'content' => ''
        ]);
}
public function contact()
{
echo "Ini halaman Contact";
}
public function faqs()
{
echo "Ini halaman FAQ";
}
public function tos()
{
echo "ini halaman Term of Services";
}

}