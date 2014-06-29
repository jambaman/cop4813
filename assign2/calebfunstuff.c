#define $a static
#define $b const
#define $c char
#define $d *
#define $e VOWELS
#define $f "AEIOU"
#define $g NAME_GAME_FORMAT
#define $h "%s, %s, bo-b%s\r\nBanana-fana fo-f%s\r\nFee-Fi-mo-m%s\r\n%s!\r\n"
#define $i int
#define $j PrintNameGame
#define $k name
#define $l CharIsInString
#define $m str
#define $n main
#define $o argc
#define $p argv
#define $q []
#define $r NameBuffer
#define $s 100
#define $t do
#define $u memset
#define $v 0
#define $w sizeof
#define $x unsigned
#define $y void
#define $z printf
#define $A "Please enter your first name: "
#define $B ...
#define $C scanf
#define $D "%s"
#define $E "\r\nDo you want to quit now? (Y/N): "
#define $F while
#define $G toupper
#define $H 'Y'
#define $I return
#define $J cp
#define $K if
#define $L 1
#define $M ++
#define $N offset
#define $O 0xffffffffu
#define $P ^

#define $abcdef			$a $b $c $d $e=$f
#define $abcdegh		$a $b $c $d $g=$h
#define $aijbcdk		$a $i $j($b $c $d $k)
#define $ailbccbcdm		$a $i $l($b $c,$b $c $d $m)
#define $iniocdpq		$i $n($i $o,$c $d $p $q) 
#define $crs			$c $r[$s]
#define $urvwcds		$u($r,$v,$w($c)$d $s)
#define $yuydixi		$y*$u($y $d,$i,$x $i)
#define $zA				$z($A)
#define $izbcdB			$i $z ($b $c $d, $B)
#define $CDr			$C($D,$r)
#define $iCbcdB			$i $C($b $c $d,$B)
#define $jr				$j($r)
#define $zE				$z($E)
#define $iGi			$i $G($i)
#define $FGrvH			$F($G($r[$v]) != $H)
#define $Iv				$I $v
#define $ilbccbcdm		$i $l($b $c c,$b $c $d $m) 
#define $cdJcdm			$c $d $J=($c $d)$m
#define $FdJ			$F($d $J)
#define $KcdJ			$K(c==($d $J))
#define $IL				$I $L
#define $MJ				$M $J
#define $ijbcdk			$i $j($b $c $d $k)
#define $iNOPO			$i $N = $O $P $O
#define $FkNlGkNe		$F($k[$N]&&!$l($G($k[$N]),$e))
#define $MN				$M $N
#define $zgkkkNkNkNk	$z($g,$k,$k,&$k[$N],&$k[$N],&$k[$N],$k)

#define $abcdefabcdeghaijbcdkailbccbcdm $abcdef;$abcdegh;$aijbcdk;$ailbccbcdm;
#define $iniocdpqcccrsturvwcdszACDrjrurvwcdszECDrFGrvHIv $iniocdpq{$crs;$t{$urvwcds;$zA;$CDr;$jr;$urvwcds;$zE;$CDr;}$FGrvH;$Iv;}
#define $ilbccbcdmcdJcdmFdJKcdJILMJIv $ilbccbcdm{$cdJcdm;$FdJ{$KcdJ{$IL;}$MJ;}$Iv;}
#define $ijbcdkiNOPOFkNlGkNeMNzgkkkNkNkNkIv $ijbcdk{$iNOPO;$FkNlGkNe{$MN;}$zgkkkNkNkNk;$Iv;}

#define $$abciniilbijb $abcdefabcdeghaijbcdkailbccbcdm $iniocdpqcccrsturvwcdszACDrjrurvwcdszECDrFGrvHIv $ilbccbcdmcdJcdmFdJKcdJILMJIv $ijbcdkiNOPOFkNlGkNeMNzgkkkNkNkNkIv

$yuydixi;$izbcdB;$iCbcdB;$iGi;

$$abciniilbijb