function tesdev($input)
{
	$n = $input;
	$mark = 0;

	if($n > 0)
	{
		if($n % 2 == 1)
		{
			for($i=0;$i<$n;$i++)
			{
				if($tmp < 0)
				{
					$result = $mark - $tmp;
					$tmp--;
				}
				else
				{
					$result++
				}
				echo $result;
			}
	}
	else
	{
		for($i=0;$i<$n;$i++)
		{
			$tmp = $n / 2;
			if($result < -1)
			{
				$result = $mark - $tmp;
				$tmp--;
			} 
			else
			{
				if($result == -1)
				{
					$result = $result + 2;
				}
			else
			{
				$result = $result + 1;
			}
			echo $result;
		}
	}
}