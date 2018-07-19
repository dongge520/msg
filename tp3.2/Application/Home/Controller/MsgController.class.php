<?php
namespace Home\Controller;
use Think\Controller;
class MsgController extends Controller {
    public function index()
    {
    	$msgs=M('msg')->select();
    	$this->assign('msgs',$msgs);
    	$this->display('index');
    }
    //添加
	public function add()
	{	
		#1.判断提交方式
		if (IS_POST) {
			#2.接受数据
			$postData['uname'] = I('post.uname');
			$postData['content'] = I('post.content');
			$postData['created_at']=$postData['updated_at']=time();
			#3.插入数据库
			$rs = M('msg')->add($postData);
			#4.判断
			if ($rs) {
				$this->success('插入成功', U('msg/index'));
			} else {
				$this->error('插入失败', U('msg/index'));
			}
		}
	}
}