var num=1;									//初始化變量
function change(change_value){				//添加function
	x=document.getElementById("result");  	//找到元素result
	x.innerHTML=change_value;    			//改變內容function
	document.getElementById("game_result").className = "centerd alert alert-success";
}
function change_play(play_value){				//添加function
	document.getElementById("play").innerHTML = play_value;  	//找到元素play並且更改value的值
}

function game(){							//添加函數

if (num == 1){								//只有在第一次點擊時才會顯示
alert("歡迎來到玩這個由「暢想資源」製作的有趣小游戲！");
alert("從現在開始\n你只需要不停的按「確認」");
alert("如果實在堅持不下去了\n可以按下「取消」");
alert("你的目標是按100次");
}

alert("準備好了麼？開始！");

while (1){										//不斷重復
	if (num < 50){								//如果按的次數小於50次
		if (confirm("你現在已經點了"+num+"次啦！")){
			num++;
		}else{									//如果按下取消
			change("啊哦，你在點了"+num+"下後放棄了。。。");
			change_play("繼續玩");
			break;								//停止
		}
	}else if ((num >= 50) && (num < 90)){				//如果點擊多於50下
		if (confirm("繼續加油，你已經點了"+num+"次咯！")){
			num++;
		}else{											//如果按下取消
			change_play("繼續玩");
			change("不錯，你在點了"+num+"下之後實在點不動了。。。");	//改變內容
			break;										//停止
		}
	}else if ((num >= 90) && (num < 100)){				//如果點擊多於90下
		if (confirm("加油啊！最後點"+(100-num)+"下！")){
			num++;
			if (num >= 100){							//如果點了100下
				change("哇，前無古人，後無來者。你點了"+num+"次啦！！");	//改變內容
				break;									//停止
			}
		}else{											//如果按下取消
			change_play("繼續玩");
			change("真可惜，只剩最後"+(100-num)+"下。。。");	//改變內容
			break;										//停止
		}
	}
}

}