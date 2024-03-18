<?php

namespace App\Http\Controllers;

class userController extends Controller
{

    public function index (string $name, string $lastname=null){

        return view ('tabela')->with('name',$name)->with('lastname', $lastname);
    }

    public function calculo ($num1=null, $op=null, $num2=null){
        
        if ($num1 == null || $op == null || $num2 == null)

            echo 'Insira um número, um operador aritimético e outro número para ser calculado!';

        if($op == div && $num2 == 0)

            echo 'Não é possível divisão por zero!';
        
        else
            switch ($op){

            case '+':
                ($r = $num1 + $num2); 
                echo 'O número ', $num1, ' ', $op ,' ',$num2 ,' = ', $r;
                break;
            case '-':
                ($r = $num1 - $num2); 
                echo 'O número ', $num1, ' ', $op ,' ',$num2 ,' = ', $r;
                break;
            case '*':
                ($r = $num1 * $num2); 
                echo 'O número ', $num1, ' ', $op ,' ',$num2 ,' = ', $r;
                break;
            case 'div':
                ($r = $num1 / $num2); 
                echo 'O número ', $num1, ' ', $op ,' ',$num2 ,' = ', $r;
                break;
            default:
            echo 'Erro!!!';
            }

        return view ('calculo')->with('num1',$num1)->with('op', $op)->with('num2', $num2);
        
    }
    public function dados ($name=null, $lastname=null, $email=null, $tel=null, $rua=null, $num=null){

        return view ('dados')->with('name',$name)->with('lastname', $lastname)->with('email', $email)->with('tel', $tel)->with('rua', $rua)->with('num', $num);
    }

 
      

};