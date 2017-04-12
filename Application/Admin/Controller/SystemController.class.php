<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends CommonController 
{
    public function lst(){
        if(IS_POST){
            $file='./Application/Common/Conf/config.php';
            $config=array_merge(include $file,array_change_key_case($_POST,CASE_UPPER));
            $str="<?php\r\nreturn ".var_export($config,true)."; ?>";
            if(file_put_contents($file, $str)){
                $this->success('修改配置项成功！',U('lst'));
            }else{
                $this->error('修改配置项失败！');
            }
            

            return;
        }
        $this->display();
    }

   











}