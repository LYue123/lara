<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<body>
<meta charset="utf-8">
<title>个人主页</title>
<style>
    html, body {
        /*margin: 0;*/
        /*padding: 0;*/
        text-align: center;
    }

    #one {
        text-align: center;
        line-height: 20px;
        margin: 200px auto;
    }

    #p1 {
        position: absolute;
        right: 10px;
    }

    #img {
        padding: 3px;
        background: #999;
        position: absolute;
        left: 600px;
        border: solid 5px #666;
        border-radius: 5px;
    }
</style>

<body>
<p id="p1">欢迎登录 尊敬的<?php echo ($user->s_user); ?></p><br>
<a href="<?php echo U('Order/score');?>">查看成绩</a>
<a href="<?php echo U('Order/addsdata');?>">完善信息</a>
<a href="<?php echo U('Order/modifypass');?>">修改密码</a>
<a href="<?php echo U('Common/destroysession');?>">注销用户</a>
<hr>
<hr>
<p>
<div id="img"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAErAhUDASIAAhEBAxEB/8QAHAABAAIDAQEBAAAAAAAAAAAAAAECAwQFBgcI/8QARBAAAQMCBAQDBQYDBgUEAwAAAQACAwQRBRIhMQZBUWETInEUMoGRoQcjQrHB0RVDUjNicqLh8BYkNLLxNURTgmN0kv/EABkBAQADAQEAAAAAAAAAAAAAAAABAgMEBf/EACMRAQEAAgMBAAIDAAMAAAAAAAABAhEDITESBEEiMlETYXH/2gAMAwEAAhEDEQA/APdIiLy3YIiICIiAiIgIiICgjRSiCMqZVKIlACsoRAVgqrnY9jlPw/hUldPYkC0cd9ZHch+/ZEMXEvE9BwvQCorCXyyXEMDD5pCPyHdfCeJOK6/iKvbU1pYMgyxRsaAGD13PxWnjmMVeMYlLWVkhknkPXRo5NHQDouO9+XXdy6uPi13fWeWe+oyOlJN9B6rEZR1zLE5xcblQt5jGW1/FsfdQzOPILGitqI2uJnBT47juAVjAutmKgleMzhkZvd37JdT0m74xeKb6BBJ/d+qzOFLDo0GV3U7LC+ZztrNHQKJ3+k3r2mcXvYhT42umnZYVIb2U6iN1mM5I5KwqOg0WFsZKuI7akfmo1DdZBOToW/JX8YDkQOpVWOhAs6E6cwVL/Zz7t29rfqq2RbsFQ3lopE7SR5lTwYyTlLvQq3szL2Jc0na+iaiO1/Fbc8z2V3xvyZnRSNbyLmG3zWJ9JkF2u06krZirqiMZTVTOsLaTuFv0so1/i0/7apha8eVwPoVrPjcw7LqnEA8fetEgHKRrXH5ix+qq5kExvASL/wApxv8AIn8lMys9Ljvxy2uPyWZjkkh1JbfTcEWIWJrraFWvas6bzH7LLe/mWpG63+izNOv7rOxZm5XKnkqNII3+CnXUX0H0QdTh7EnYPxFh9eACYZmkg7ZTofoSv0m61zY3HIr8rOuQdwbfJfpvBattfgGHVbdpqaN3xygH6hc/LPK1wvWm2oKtZQViuqQqkK5UWugxFqoWrOQqlqaSo0LMFQCyuNkQlERAREQEREBERAREQEREBERECIiAiIgIiICIiAiIiQIURARSoQAvjX2l477bijqeN94Ka8bAObvxH56fBfWsVrRh+E1dWTbwoiR68l+cMXqTPVPc51yNT3K14sd3amd1HLlky3ufOefRa6lxzOJJultF2yaYIKhTZQVIhACTYC5KLo4VBmlMzgSG6DseZ+CZZTGbMcfq6bFNRxUcPjVBGb/tPQd1pVda+reQBljGwV66V1VLcaRg2B6+iwPjEZDLjNz7LLGd/WXrTPLU+cfGudNCo7q5AJ0ultdNVttjpUA9FkFxzUhmnrsmdwOn5qEzpcOmAsDZXbFK9upcdNBcqjJHXtlA72WQOndcMkLu2x+Sr2t0xOa6M2cwD/ELlWZYnzN07f71UkOfo8Ena5OxUtzRkG2dl9dNQiGwyF2UOiN299r+izRuY/7ssbn5t/0WSlMTrG5aToCP1WeekZNHctDXj3XciqbWawjiDXeHmA5gnb06qktPp5gC3l5bE/FWLpIiGyEtcNnHX/ys4zEWcBboDoVG7BzTC06EWvsSNvVUfTviIu2/cFbkkOXzNJLRuL3sFmjhBbkefI7Ynb4KfqjUa0TDK/M2QCwcR+fZas9O4G5YWu/Nb0kEtNP4Z1F/KSVlc0OhaWnToeR6Kd6LNuK11jss7HLJNTgkkD4c1g9123zVr3FZ02WEnW9rc+SuHdrDl3Ws2Qnr+izNdfQEKlizKT5l9t+ynGW13DDsNc4+NQPNgTvG83H1uF8Q02XsPs1xj+FcX07JHAQ1gNNISdASbtPzH1WfJN4r4Xt95KgqSFC5tNUKCpUKBCgqSoQFYKqsgIiICIiAiIgIiICIiAiIgIiIgREQEREBERAREQEREBFF0RKUREHl/tCqDT8H1BH45GM+q/P1XIXXN9ybr759pcDpeB6t7QfuZI5DbpmsfzX5+n90XXTweMuRgCk2QBOa6WSD3UaEKSo5JEK810Y3n2NsTbDPq4/FaLGZngdV1KdmVokIs1o8v7qufi2PSpjMQzloBaLNb0P7rRLS51zck6krqSseWa9Nu5sqiEMYS1oLh9eiiZJaHghgaDu7VGhjdhcDcnmtquZaTw2G+Rliett1rwRl9mkW1F/S91O+kIdfPa2tvksRbY9rbrZqWkTBwGtrqMl2/RNpYfDNhsCszY3kB0ZDXD3hfT1TIS4jL8lsxscGkgXbbXmo2KNlma4td94w6WdrYrK2zw1wawA+81wt2UiMCwZoDa11siDxGuDSBmHyIUDX8HI3MAO4PMdD+6ztmMbWubfLtruD0P7rLEGksJBa14tvexWrLG6Fz2O81tAOo6KoziWOdt7DXr/vRY8uXUOzA8rrWP3Z0FgdL9VkZJfkAfz7KEth5bkzMcM34gRuop9ZDFbS12tHTt0WIutZwN7clDfK8OYdtQVOxuOaHxnMLsGrDzb1B7dFgfE5tjezXaPb+v7rL7Sb3cLG1nt/ULPG5knldazhr6/sU2ORPGX7XuBuFzpHEOBOoXbqY/Dc0jYaGxXLqY7PcABa9wr41WxrtN9RYDoszD1WpexWZj/RXsRK2wdFlie+ORr4nFsjSHMI5Eaj62WBjr7LIDrpdZLP0zgWKNxvAaHE271EQc8dH7O+t1vr5r9kONeNQ1uCyuGaA+0QjmWuNnD4Gx+K+llcmU1dN5d9qFFKKqVSikqEEKyqrICIiAiIgIiICIiAiIgIiICIiIEREBERAREQEREBQhQIkG6BFKApChSEQ1sUoGYphNXQPsG1MTornlcaH5r8xYhRTUFbUUVSwsnp5DG9p6hfqgL559pfBD8Zh/jOGRF2IQtAnhYNZ2DmP7w+o9FtxZavauc3HwuxCXuszmW9eYWIjv8ABde2KtrBDaym+ndGtuVKGeCO0ZceehPZb0BMkrGO2zDNb8lgeMkcbQLErapAWNBbYnUm/dZ27W025YwS3vJr81LmBkuZwBa3YDrdXHvA/izrGX3dYD3n6+iptLUMd6R8hALpJMv6lWZA3KcvJup5LZMYeyNltAL6DqrPaGR5QLZyBbqp2nTQqI3ZWSlmhABWAWboDcOXa8EOiLHAdr/ktZ9DE6zX+U30cOajZrTFDGx9j21v1W22FuU8ri1lgFHJTkOYRINL6WK3Iqg6hwLSBzuVKNMEkLAxt7DXmpp9ACN81gCsjy0gEk722sscYGYhtgXEZSRbUJs0yCMtc9rm/dP8wtra6xVDDI1peRmG5/VZ33DGyN37clqSy3JadD+ZUbGF0YLQDpe+qqaezb7ZhyKyNl8ljuCCD0WYWa4abfkpJGi7M0a/NYw8sJ3IXSliZrYHTtutKansPIb8yOyJZQ5s8emjgLX6LCJHse5pJAJ0WFrnROv8Nf3WcObM0ZtCB1QBVZ25XnXY/uteo98Dk4XH6qamB0Lg4atOxCi4kit+IHRTENCQEOsoGqzztzNDgtcAgraXcZ2arPG8iwuthpB1WmCVsRuVLFo9PwVi/wDBeLKCre8NhL/CmJ2yO0Py0PwX6JPRfldhX6K4MxM4vwlQVLzeVsfhSEn8TdPysuXlne22F607iIixXQoUlQgKVAUoCIiAiIgIiICIiAiIgIiICIiIEREBERAREQEREBOSKCiRSoUhBKhSiIAVcOOljryWNSCpHiuL/s0w/iF7q2gcyhxF3vHL91L3cBse4+K+SY7wVj3D5c6toHugG1RB95GfiNviv0kCrA7jkdx1WuHLYpcJX5JAF7g3WSnb96L79V+g+MOAsN4gwyZ9FR01PijfPFKxgYJD/S63I9eS+DSUk9FVzUtRC6CeJxY+N+haddFvjyTKKXHTGRmeNdACR6rZicGhw/uhYRHzBFxyUxndQluxz2ndc7G4Kox+WxOjisJcQ53WxVm6kkDmCq1LdhdcvcdrW9P92WWINlkyjTKNeywxuEVFntvtcLJA4Q04lJu597BRV9dxmmfrZtrA3ugIcLaa/RaheWnU2PL16qzCQ0ho0I369UVvdZ5HNDHWGmyxNcLmw3NlrvJGl768lQSuyuvcHN9FO0adEAPd5RYXWN7A15B0u69+V1GGP8Rzmnff1WzUxWcb7k8+aiXtb562x5rxEE/i+d1o1BN82mnvBZZZMt7knay13Sh7wT0VlGu5m5GllkicQ2+bUaWU5CLX2PNUA1OguNwo2tptCfNGLjYWVHyZvMR5281r31v+SrnO4Nx0Q0ucr2u031IWKJrWv12OlwhO5G3MKuYnUEgjVWiG+YmvpJARmLTv2XNIyS9QtkTWGml1rz+7fuFOKrFO0ZL8rrXF9is8pJgvdYGb3WmPit9ZGhZBoFQHqFYa8rqKlmYdd19r+yKVz+Gq2M+7HV+X4sH7L4o25K+7fZbh76Lgxk0jS11ZO6ZoIt5dGtPxsVhy/wBV8PXsymykqFzNUFQpUIAUqFKAiIgIiICIiAiIgIiICIiAiIiBERAREQEREBERAUFSoRIrBVUpsW5oQoVgiFEViFCCFYFVRBlaV4T7SeF6XE6L+KRhkNdCwh0h0EjALnN6DY/Be5aVpY1TNq8HqY3Am7OXqCrTLXZp+ajHJDLIySNzHg2c1wsQed+6wk5ZLA6FfS/tOwNsMdHjUYAL3GknAt7wuWu+IuF8ykFnjo2y6cL9TalmmUvGaxG91np2h1htdanM9rro0MRlkbYbNy/NRl0nGbTMQKaJmbTKL/n+qzU8T5QJ3f2bTYA6DZaRvL4LBYXABJ33t8v2XeMPhYbmLSGwsLmg/iNxr8SQqXppjN3bjStc6qcy+Yh2wG50/Vb/AII8VofsxoLgPibfRa9PGI6ilkeHEySZrn6fnddSJrS+WoebMuXAWvfkFFpji4M8bg9418u/ZUcwltxq2xXYq6TwSyZxuJiQTztfX9lhp6UOE0TtS29x26q20fHbWw0mOujuNCbH913sUp74X47Ll0ZDtOQ/8rjwx6xBt898pFtTYbj1XqIC2owqR51ilaY3ED3TyPz3VMrqytMMdyx4up2a4ai3zWu1ucW58lvOjz0BJ96JxY7sFpRSeGdQDb6rSMLO21TNEzDE85XN68u6rJTSRuc4ttbR36fBR4r45BPHu3X1C6UbxVhro/esfL1HTuoq01enLNOC3Mxw11seRWJ0bg7zNLTfbkur7PZwc1muxHL5clsR0UkosYXkbXFiPjdPpPxt51wLHadVQkA3OnML1L8ADmZywx26G9/guHX0gpJcpFxve1ipxzlukZYZYzdal/Lpty7KslyGk3A5qXMMZu3VvcKbhwvqLrTxkyUOFVGL1LaSnyB7tQXmwWTF+G8TwEtNZBaNxs2Vhu2/S/IrscLtqqXEWPhawS7tL23BFtvQ/mveyPmxWJ2HYixssFSDHmy2c020+W6yy57hlr9Onj/FnJhb+3xlhHNZBa2n5qamlkoa2elmH3sMhjcO4NlamhlqJo4YWGSWR4axjRq5xNgFvXJr9PTcE8KS8VYv4brsoYLPqZAOXJg7uX6DZGyKJkUbAyNjQ1jW7NaNgPguNwlw9Hwzw9Bh4AM/9pUPH4pDv8BsPRdsrkzy+q2xmogqFZVWayFBViqlSAUqFKgEREBERAREQEREBERAREQEREQIiICIiAiIgIiIJVTupUHdAUhQpCgSpuoUKRYId1AS6CCoQlEEhZBqCDqDoQsasDqg8b9p9CZ+C3uaLezVDJTbm2xbf11XwmU2e7TcL9J8WUsldwjilPCwPlkgIY08zovzhLGXVbGBty42sAt+K/pXJibz9F2sOkbCyZxH4Lj1K4z43U80kUjSHRuLSCNdCuxhlKa0ZWnUD5hXz/7MPemlSlviw+ISA0Dbnqu/iFSyow4tjNm6NsOeptfsFynYVWRCxp35mEsc0Nvst+DC8QdFpSTkG34SqXV72vjbOtM2LU8Yic+J4JhhjLR35/kt3C6aOslpImv+6NpHuPpoPW60v4diGQRmCRgAsQ7mF0sFo6zC6g+LHeBxu42909R1CyyvXrbHvLx3q3BY53lpYCxzcmvp/v5LyPguwzE8k+xYWuJbcEHnfpz+a+n02WaNpaQ4nVve2v1XJx3AI69pMLQ2Q+aNxG3JzT2WWGf6rbLHfjxGIULqZ9NVBpLdHjW2ltVibiE9FE9gbeOTRzTzPX1PyK9pSYLUSYf7LWMafDbaNwOo7LHHwtDI3LKzlbU/7stP+SeVS8d9j5lJM5skrWtIa86grXyG97XC+kVnBkFMTVB7TGyxLZSALc7laArMBw6t8KlpKqtqN/ChiJLD0/8AC0x5Jf6xheLX9q8lSwPdIA1pdy0XdpOGqsObLG0+GfMMpOtt7d13qPiHCq6WQwcP1BfCCXG7bsHoF36PE6OvaHRQkd2vAIPI2PMKufJlP0vhxY39mHYJG6kZ40UU4I94nVZX8OU+bO2PK46aFdOlzB3mGQ9Wjyu+HIrqCG7dRqsPrbbx5SXCImR28MA9V4THsNz4hEzKbOOvoN19cqoQGmy8bilG2bEmBumVpc9x/CL2B/X4K/HlrJXk7xfOcfibDNDExoBLc7iO+36lc+GIucWt1cDb1vst7FpxV1tRONGOfZg6NGg+i6vC2DHEI6iVws1uVoPfU/ouu5axcmGH3nqPY8KUtMaZhDGZw3IQDfuPTmu8aVoqG+G33HA26LiYJRSQV4i2cHXIvoV3ayvjw2ixHE5f7OmaXD+862g+a4cu8unqyzGPjHF5Y7jLFcliPaCNOoAB+q9/9k3C2Z54irIgWNvHRhw1LvxPHpsPivH8IcKV3GWMvkkD2UYkL6uptoLm5a3q49OS/QtPTQUdLFS00QighYGRxt2a0bBdvJl8yYx5E7yuTKouihc9XERQoSKCpUFBAUqFKAiIgIiICIiAiIgIiICIiAiIiBERAREQEREBERAUKUQEREBERBKhFNroK8lYKQEIQQgRBugyNAIsdR0X564iwqbD+Ja9sLMrqeQytadbtJvv6FfoZuy8TLSR1X2p1kT2ixw5jxcbEWsVfG6o+OYxBI6SKqewh0g+8N7gm+hv6fUFdfgWHxayYCxdG0PAPTb/AH2K97xpwJFVYe6sw2FrZo3FzoxpmbuR2tuF4XgSQQ8SQxm4MsT4yD13F/ktLlvCmHWce6lxCkwqNxkYXE3cGjU91jwjFsUx57nYfhlPHTtOUSTSG5t2HJbmIYHDWRnMLtt7pOhXQ4bEdDAGOysvcZQLW/0XNh8/t15fWv4vH02PYnib8QdBhFNUQUOsro5xG/LrqA7fYmy6OD4pQY5T56Qva9pHlkbYt/daWM8B1T8Re/C6qD2WV5flcS1zb8jpqPRd7CuHxhGF+xxOp3VDneI6aS/v2sLNHIbLTPHDXXqnHlyb78bNPTiBwytyC9y0bLtQwGWO+431WE09omuI1I1AOxXYw2NvhAEclhMd1pll05UlNl5aHVasjcrSdBbe/wCa71XEMxWrNSNmp3sy6PYWkDodFNxJn/ryWEQMxnE/Hr3jw2G8EDiLBuwdbmTv2XH4l4fxfBeIqjE8FZP4dVc+LTm7mE7tIGtrjdew/hkVO5ojp2Na21g0W2W0x2X3YyD+S1xz+VeTjmd28fwZw/VYWyqrq2B0D5m5WMk943Ny6y7lFg8YnzAADncarqiJ8x9z4nUrep6QM3uSq5ZbJrCdMcVFHGNByWctAasxAAtZa8htuqol20awgMtoO68PiTy/C8Rq9QZgWM5EN2H+W5/+y9HxJVPgw6QR6zSkRRjq5xsFxcdYYcL9nDsxY2xPV1hcqceuz26fK6mNznxxsbdzyAB35L6Fw3Sx0Ae2lL5W3GYRi4LgLHVeVoMMGJ442J7i2KFhe9wFz2HxK+i0ccdNSNhomEAfiIWnLn1In8fDW8mxR076VzqyobkcbiOI+84nYWWxPwsOIaCGjq6h8dDHL4lS2LR0798t+TR1VqKhfLVsy5pKmTZ7jfw283dgvWxxR08DIYxZjBYde5PdZ4e7X/Jz1Plr0VDS4bRx0dFAyCniFmRsFgP9e6zqSoWnriQoUkqFUCoUlVRIoKm6hAUqFKAiIgIiICIiAiIgIiICIiAiIiBERAREQEREBERAREQEUoghERBHNWBVUGiC90VQpugIN0QboMrdl5M3j+1tmwEuGEfEL1jdl5yrZ4XH9FLYWkpmNvzHmcP1/JWHpHNDmOBG4XxLFMJlwHj8Ogjc2LxWzR3PvNPvW621+a+4ALg8T8POxmjY+maw1tM7PDmGjgdHMJ6OGnY2PJTKRhbGJI+xWA0To3EsAN91jw7EoGUERqZGwuaMj2SHzNI0se6uceppX+FRwVNXIP8A4oyG/EnZYarqmSfBmJA923RbdPTBrw51yVqUOOUtVV+xztko629vAqRYu/wnZ359l2fDyjXQ907/AGt978VlAy2AW9Q6NAPJc6R9jZdCjOgPZWx9Uy8XrG3dp0WKEkabrl8Qu/iNXFgrXODHt8ascw2LYQdG35F7tPQFa/8Aw5hD3ZzTvzdRK5Tdb2rPHckp82uQ/ALE6mcB/Zu+S50XDuGgWaycDtO5ZTwzhjx5o5j6zuTUpuxvRxkciPgs4Fh2XH/4Xwgf+1J/xPJVo8HpaFxlw6MU01rX1LXDo4fqE6h3XTkdZaM8gANlRtYZHOjkaY5mi5Y48uoPMd/yXPxKoqGQhtI0Pq3vDYYy24e6/unoLX1OgVb3Vp1NuZU3q+II2nWOij8U/wCN2jR8rn5LnY//ANE8/FdvDIaR2FzS08gm8R5LnF2Z5e1pzOLju3awGnQrlYvTe1UhiuQHOF/S+qnKashx3crk8JYfejkqXNHiTPzE9uS9VFCWvbFE3NI8hrR3VuHcBjq6EzGrmiu82YxrbWHcr01HhlLQEujDnzEWMshu63bkPgnzu7q3/LjhjqerUdDHQQljTnkd/aSEauP6DoFmKsSqFadfpy223dQUOyKOShCOShWUFKIKqVYqpUJQiIgKVClAREQEREBERAREQEREBERARERAiIgIiICIiAiIgIiIJuoREBQVKWRIlkUoCgopRCLKRuis0aoMjV5jFa+jkx/CaqGphmgDXsfLC8PazK4ONyOgvdeoDQ4FrtiLH0XyriWOeWvAijZHVNikpnRseA0G4axwawWYddtzuVaSE3+nu4KnH8VgiqqYUNBTTsEkRlBllykXBIGgJGtllGA1FR/6hjVdUf3IiIWelhcrlz8acPYBTQ4eytdWSUzGw/cDNq0W97bkuJU/auGutTYUCOskv7K2r+opc8Z+3p8RwWhoIYqqlpmhrSGyZiXHXY691lglzMDR7vIbBfOsW+1DFpaR7GUtLEyTTLYuJHqV63BcTirqGGpiPlkaCB06j4bLPkxs7ro4eSZTUdmrw6ixKDwq2mZOzlmGo9DyXNFDiuD/APRVRrqJv/tqk3kYP7r9/h9F1o5RbUqS10rQGjQ8zsqStdObHVtq4jNEQQ1/hvbfzMd/SRuD8F1mVkNAxj6rxWsOl2xOd9ACojp4mVMkzmRslly5pMur7CwuewACyz1DIoXl7vKG3I7LSYz1Xu9OTw6YsVlqHRzf87UySTTZ/IRkOUMsdQGiwtbn3W1NmhmMZPIO+BXEp6KsoJ31dOXhs9nSeG3N6HL6aG3QLdo6mCWpfmq2yyk6hzhm+W4+Srlqz/sksvd6dKKUg6arcjkzDdcmsf4EZkabW1PotuJ5LGuvo
    RoVTyrWN0m+ywymwKnMbahYnuzaKbUSNDEXtZSukfG55jGdgZ7wdyIPI91w4akOiJq6maCN77OiePNe+b3zbQjoNybWXVxStNLE2OCz62Z3hwRX3d1PRrRqfRUigEFLDA57pvC1D5DmJduXa7XJJ7JLqdllvjR8GXx5al8so8fzGAnyx66AdgLC3ZYaohsLydgCfouhIuBxJVihwGunvYtiIb6nQfmo7yyX6xxfQcKFP/CqWSkc10D4mva5uxuNT+a2ivzrhHGuO4RQRUlJickUEfuMcwPa0HsQvUYR9q2K0s7BjEEVXTO3khAa4DqOR9Cum8dnjgvJN9vsCjmuFhnGvD+LFrYK9kcj/dZMMhPz0Xfy21+qp4vKoQoVjqq2QLKCpRQKlQpUEKEoU2REEWRSoQEREBERAREQEREBERAREQEREQIiICIiAiIgIiICIiAiIgIiICIiApCWU5bC525nogNFyswbZcTEOKMLw0uaZTPKPwRa29TsvIYt9oVW5ro6VrKcHYM8zh6nkrzC1TLkxx9fQMTxSiwajdVV87YoxsD7zj0A5lfLMQ45jxDHHVZpTBC2Mxwub7/q/qD05aLy9dW1VfOZaqaSZ/Iudey0nXAW2PFJ6wvPd/xdMy4bXTSF3/IOdqHsjc+M/wCIXzD1F/RYJMGrWRmaFrKunG81I/xWj1A1b8QtFt7WGpOyvBI+CTx4ZXxyt2kjcWuHxC0sv6U+5fY16uVjmgZgLDqvYcAYjL40uGta+TTxWZATlPME8uqpwtNinENcYH01BUQsdmqameja54HTNpdx2HzX1DD8Mp8OiLKWnip43uuWxtDb/usOXKa+b66vx8LL9y9L01PI8Av0HRdNgDdAAsLNALclimrY4WkuOo5Ln8dfdZKuojgiLnuDQBc3Xj58ZGJVAgicG0wNyR+P/RbeJmTEI3eKSGHZgPLuvNswySmmd4JIB5W0UetcZ8vanFoYKYZnaNHyXIqMXwzEHFrqJ9Q4fj8LT/8Apa0OG1E7GsnePDuCQBYlelpsOYImtA0GygvzHBpKaWrlEdKamGnv5i912+ga69/Vd4Q4rTABstLUxjlI0xOHxFx+S6UMAYAANlkcOqt+u2Vu704tVVYtaNlJS0rS5t5HzyE5DfYBvvac1rGhrqlo9txWTLb+zpWCNp+OpXbla1a5bZVtWjn0+HUlG4ughAkIsZHEufbpc/6LI7QLO4arBJYKtWjWlNgdfVfO/tHxER0NPQNd55353dmt/wBT9F7+olDIy4lfEOLq99fxNO+/kj+6Z6D/AFW/4+O8/wDxlz5fODSa6zWrLG+SM+Q6HlyKwN9xqzR6t+K7dPPz/wBb0LwTlc0BrtwNLFen4Y48xPAJhTzvdVUYNnQyO1b3aeX5LzIcGx678ljkIc5rjoSFFxlnbKZ2Xp9qi+0nDZLF9HUBp/E0g2XoMNx/CsXA9kq2mQ/yn+V/yK/P0EsgFmvsOSymaVjw8Pc1wNwQdQVneH/Gk57+36OLT0VbL5fw39pM9JTilxaJ1U1ujJmkeJbob+8vc4ZxZgWLWbT18bJT/Km8jvqsbhZ63xzxy8dZRZZCzS4sQefJVIVV1LJZTZE0IKhSVVQkREQEREBERAREQEREBERARERAiIgIiICIiAiIgIimyCEUqEBTZAFkaxSKBquI7my1a3FcPwxhdWVUcZH4L3cfgF4DiDj2qqWugw//AJSnOniH+0eP0CtMbfFMs5j69XjvFuHYHeK4qKvlEw+7/iPJeAxLinEsULvHnLIT/LZ5WgfqvOOmLnFwu4nUud1VHEu983PRb48Ujlz5rWxPiNwWRkn0Wg+Rx2sFdw6LE7yrTTLbEcxOr3W6XssZzXsJHLNcW2VIo3zTtijY58jjZrWi5cegClMZqaM6uec1gQNLLp8M8MVuP1rw0OhomOtJUEf5W9T+XNeowLgGWUMlxYmOM6+zsd5j/iPL0GvovoVJSQ0kLIYY2xxMFmMaLADssOTm11i6uH8e3+WfjXwnCKXCaGOjooRHCz4kk7uJ5k9V0LDmNAraWsFzcTxWDD6aSWWVrI4xdznGwAXLXfJ+ovVV0VNG57zla36rhNnfPIZn6Em4aPwr5pxVxfPjkphpy6KjDgRydIRsT0HQfNel4ax7+KYeDI4Cpi8so69HfH87qc+PKY/VThyY3L5j1gIdoVUxx5rkgDqV5+txSrpZAY4DKw9Fzn4liFTISKacnk0DT81ElsaSbr6LHHDLG0xyxhrfeObZbf8AE6CFoZ4pcQLXAXzimqMWhcXSUEuU6ADU/RZ2UHEOIPJpYBAy28uv0Gyn5rT/AIcbO6+itxKkeLMmbdRJVxho8wse68FNwxjELPvK+NkpF/KzUeuq2qXhysm/6jGJ8ot7oA1Sy+VS8WMm5XrTMx40NwsTnfJasFGKOIRtmkkA/E/UlXL7LOqSEj1qSyaq8shtouZWVTYY3OcdeQ6qFpGlitV5THfu70XxjEHeLiD5P6pCfqV9MxeoMNDPM53nLSfjyXzKbWZnrddX401aw/J80s33G+iyw+9b0VbeVvorwC84HZdUcGXjaeToOqmWOzmnoEd74FtltNYHixUudWAWjJV81xY3UuaI4wBzKra6aQjY91seSVv3lg7+sfqsKu3TuEN6dfDeJ8awNwFLWv8ACH8qQ52EehXusH+06iqSyLFaY0rzp40fmZ8RuF8vLrDt0KoCLXsPgqZccyaY82UfoqGaGqgbNTzMlids9jrgq5C+DYLj+IYFVeLQzFrT70btWP8AUL6zw3xfRcQgQuHs1aBcwuOj+7Tz9N1z5cdxdOHLjn1+3dKqshbZUKo2QiIoBERAREQEREBERAREQEREQIiICIiAiIgIiICkKFPJAKBCgQXAABJNgNSSvDcSceMieaTCJQ4DSSpaPo3911eOq80XDbo2Os+peIx/h3K+Pk5nOy2FttOS248Je65+bkuPUblTWySEylxcXHVzjckrVd5rE6uPMqxAkpyOY1Cwxu5HkujTkttXtbXdTvqpFjsRZOVlKGN2nNY3WIWTw3TSiONjnPds1ouT6BenwngDEavLLiD/AGGE/hIzSu+Gw+PyVbZPWmHHln/V5ehw+rxOujo6OLxJpPgGjm4nkAvrfDXCVJgbM8Y8WreLPqHCx9G/0t+pW7gmAUODQuiooS3PYvkcbvf6n9F6CJoAK5s+T6up49Dh4Zh3fWv7M1gFr6c1Ga2lrLaLhbVak3ZZf+Oj1y8axiLCqGSeV9mtF9N18Y4j4hq8cf8AeOLKYG7IQdAep6lfT+K8BqsbonU9K5gkcQR4jrDQ3XJwj7NKaBzZcYmbVkG4giu1nxO59NFpx3GfyvrLmmdsxw8fPsB4axLiKpEdFCREDaSpePu4/jzPYL6dhn2e4VhQbLHUVj6kCzpfEDQ7/wCo0svWwwxQQNhijZHEwWaxgDWt9Aj3WH1TLluS2HHMf/XlKyiNA8BxzxuPkfbX0PdaDiWHNHZdDjDFafD8IdLM6wMjG97k/tdcmlnE7Wlrg5p1DhzHVZas7dEydSnxeSOMNdGCR2vdbLeIZ/dZnb6Msq01AHjey6tPhVO1vnaCe6r9Ve5z/HPjmfO4FxcSTuSunELN0FlsswyJou02VjSlgUXf7Uue2FzzZYH63Wd8dlpVlRHTRFznAAKKiNWsnbDGS42AXn5ZXVEpkfsPdHRTUVL6ubMdIxs3qtaqqBDGTe1kkX8ef4oq7wiAG9zcrxps6fXkuxjNR4kxcSuRGMxLupXdxY6jh58t1k5Dorwf9Q1VO6mLSdq1ct8bv4rraiHM3WqB5gFuNFmhWc1RNZ2W11Vumyl2wVbppCeanZAO6WF1KEH6KLK5t1UWugC191sMkdGWvY4te0gtc02IK1wNeayX0CgfS+F+OjN4dFjDxmPlZVba9H/uvdG24IIOxBvdfn+F24vp+i+q8CYt7fgzqZzrvpXAC/8AQdR+q5+XDXcdvDy3L+NepREWDoEREBERAREQEREBERARERAiIgIiICIiAiIgKQFCsEFSpCFBug8V9pMb/ZMOlF/DEj2H1I0+gK+ZvbkN+/yX3bGsJjxzB6jD5CGmQXY+3uPGrT818MqhNTzyxTR2fE4skZbVpG66eLLrTk58e9qxyZdSdOao9uSYjl1RgY5pfGczDuFdzDkZrcjS55rVzt/C8LqcXro6OlaM79S5x8rGjcnsve0v2eYfTsaaueapfzaDkZ8hr9VbgXDBh+E+3yttPV2Lb8ox7o+O/wAl6UvkmdqcrPqVzcnLd6j0OD8fGY/WUatFhtDhzctDSxQX3LG6n1O5W62O5vrupa0NFrLM1tmrD11SanS7WBg7rK3ys13KxZr2bY7q73aADkpiFS7osTrOS6nTpsoWjCYc3mGhWGSJ0QzEmw6rosAGrlp4hIPCd0T9LRq+0eXfRcLHuIafCqZ75X6gbA6lc7ifiunwKFsI+8qntu2Mch1PReEgwfiPjCq9ojpXmMnSWU5I2+hO6vjhvu9RXLkmPU7rm8QY9U49KHSjw4mXLIwb27k9Vm4U4h9imFHUvvCT5HX9w9PRfRMB+zChoiJcWeK+f/4wCIm/Dd3xXqKjhvBJqQwSYTR+GdPLC1pHoRqFpc8Pn5k6ZY45/X1b25GHYlG4AZm67G67TKppAsfVfLMUjn4YxyXD45XPp7CSDOb3Yf1Gy6FHxPMxoDm306rC4X9OiZSvp0dYA2xt81ElY226+ff8TTkWaz4lyo7F6qfeTJfoq/NTqPYV2Lw0zCXvF+QG5Xl6qukxCXM/SMbNWm0Ne/PI8uPUq/isbtyTS0ZM2QXK87i1aXuLGuWzieIZGkNdb0XnpX5mPlecrBuStMMP2z5M/wBOVWu8SS19yjAOXILE53jVGcXDdh6LMBlC7MZqPPyu6ghTH/bMRWit47VZTLxvRi7trrZ52WOJv5qc2pPdS5knRwSw6qTuLdFXW90QtsOykajZQRpdSBopQEabKp3VzsNVBagDUlHmzgO11doytcegWFxzvZ/hsoGZhysc7oF6v7Oqx0PEjIB/Z1ETmEeguPyXj6k5YMt9XEBej4Cdl4roAOrx/lKrnP41pxXWUfZEQbIuJ6IiIgIiICIiAiIgIiICIiIEREBERAREQEREBWCgKQggopKqgzMK+XfaZgzabEocUpi1r6gHO3nmbz9CLL6gxfNPtGqTLjkULTcU8IuO7jcrXj39TTLm18PnMb2zvLoT4VQ33m8nLtcOUj8ZxiLD3sLR78pGwYNT+3xXDq4vCq2yMuGv1B6FfT/s+w0xYXJiMrAJao5Wn/8AG07/ABP5Lbky+cdseLj+85P09i1oytaBZgADQOQHJZgNB9FVrbEX0WbLa2i4XpoaPosoAtdQBopUm0g2158lUn4Jytuo62UqlvNYLIGhnr1VQQzcalVLu6J2s51iVoVLHTuts1bm++qytpw8aiyjW0yvPfwDDJq32uejhlqBoHvZcgLtMAAA2AGgsqzmON3l1PZYpJsu9gptSzlzQO61Z6prQQT3XmuIONsLwW8Uk/i1A2giN3X78h8V8tx/jHFsbzxmT2ekd/KiJuR/eduVbHjyyZ58mGHvrZ4/x6PEuImOoXMkipY/CL2m4c69zbsNlyaPFGSWaTlf0K5DWlhuFDw1wvlIPbmuv4x1pzTmtu3rGVwba4Ww3FGjTZeVp6qZgyu+8aOROoW6HxObfMWnoVjePVbY80v7ejjxIOda5WSetayMkleZZOyI5i647arXq8RlmGVoLG9TuVE4tr3mkjZrcRa6W5Jdb8IXPqayarsx4a2NuoY3a/fqsIFza1yVkjjIOq3mMjmyzuTLEwNbcgXVI6hkziAbdB1VpTmbkbtzPVazoS03AseyuxuTbI6LJTNzTjsFqxSkjK/Qhb1C273EjsoMr/Fvx6Ak7AXVBo31V5NIT1OgUNGnZS5mQWI2VTYHRQDrsrckiEDZWBA5ompPZSJ5qbclVpF1e/8A5UCkxIiyt95xtfoqQNzEuItyA7K0nnkt/S23zWVoDABaxciWtVeZ8belyV6TgIX4uoR0Lz/kK8zMQZXEctAvV/Z6y/F9Hf8AokP+Qquf9a04/wC0fYEQbIuJ6AiIgIiICIiAiIgIiICIiIEREBERAREQEREBWGyqpQCgUKzQgyR7j1XxTHq59VjtfUOJc10zgOwBsPyX2aoqYqKklqpnZYoml7j2C+GVf3s8sjQQHPc4D1N1txTtz/kXqRr+yjEZoqSDV8rwxvYkr7XQ0kVHSQU8QAigY2No6gC3+q+ecBYS2pxWXEHM8lMMrL83u5/Afmvprb2tz9FTny3dNvxcNY/X+pDdSVcC6gbrI0WWTpqpFhqo7qzrrE5xJ8uylAXa2CnUG4tqrNaGjuqne5ROtIcSgabeqW531S59FCYyM8o03VZZiOZVQTfdSIw4i+6RLRnls650aNdV43FMUxPF6l1LhkVQ2AHK6RjCHP8AjyC95NStcDmG6yQNZG3Kxoa0KZEzKTt4HCuB5JBnq6ZkV9/EsSulUfZpw7PE4GnfFK7+bC8tIPW230XsHPDQTda0lS1rDcqfrSuX8/Y/PfEWAS8P4zNh8jw/LZ7HgWD2HY25Hke4XJLLbiy9j9oOIwYlxKTTuDxBEInPBuC65J+V15XfRduF3Ja83kkmVkYcl0DHDY2WXKOllYNbb3irM9sQD/6lLo7jU/NZwxnUlZGtaBo2yI20PZ3nYEDqVlbDl039VuFnVQGHcAKE/VawjVjFdbIZpqrhgvspV+nPfSOdq0ahb9JE6OIZhZxNyFla23JZWgdERcrZpimN3tb01VgNFjF3yOd3WU6IqdFPw0Tcc1N9EQm2upUAqR5ih053UipB5qw6XKgkWVHOsxx7KBDZGtY6aTQE3/0WIvdJ97JcE6MYsbCJpLnSGLbv3WcX0e62Y+6P6QkW8Q4Wa0aF116Dhac03EOHyM0PjNb8HHKfzXAYM8gJ2C7WBkfxqh6e0xf94UZToxv8o+4bIh3Pqi4XpiIiAiIgIiICIiAiIgIiIgREQEREBERAREQFKhEBXaFQKtVUMo6Oapf7kTC8/AKYPEfaHjnngwOB2rnB9QR05N/VeFmfY7EvcbADmSVr1VbNW4w+rnN5ZHl7v2XpuDcMbiWLe2vGaKlIyjrJy+Wp+S6OuPHbj1eXPUe54cw0YTg8FNYeJbPLbm47/t8F2QojjytsFkDO1lye916ckk1EgaITbQKQzW1lbIpRtjIJAvspAsLqztFic+wKirSDjfdYy/l3UEm226hrTud02LX6D0U30Vcw5aplP4tUgakiwWeJ3h62JVAQBdYpatsQ1OqQ9bEsz3NJcAAtGSqEY1cNl57GuM8Nw4ObLVB0o2hj8zj8Bt8V80x3i2vxkuja409Kf5bHau/xH9Bor48eWfimfLhxzv19ExjjzC8NzRNmNTOP5cNjb1OwXz/GuMsVxcOja/2WnO7IjqfVy8yDbbRXaeq6cOHHHtx8n5GeXU6igu3fZSddlltm6KMhC1c+1A0uV2s6hWAt0Vmg301RG1mstrZANb6K2W+6tYX0RGy11NtFNlIBRG0NYSFcN1QD6q4FhqiENbqpkdlYTzOikaf+VjmOrWoIjFm35rJtzVGizd1fW2qIpup0tdNLbqpKDJfRUJ+Cgu0VC6+p0KGgnmsFW+0LWjdxtp0WZYHNz1QJ92Nug6uKLRkia2KINdqdyOquLu9Tv2RrNcx3/JSXtaMoSIq2gblGi6eB6Y1h/T2qL/uC5LdrnnsuvgYvjWHXtpVRn/MFF8J6+6HcqFJ3PqoXC9QREQEREBERAREQEREBERECIiAiIgIiICIiAiIgkLn8QxSTcN4gyIEvMJIA521K6A3WRrQ/ynUO0PxUws2/P88THPEgOV3bovq/B2GDDcEgY5v3rh4kht+J2v0FgvmkNG6figYaRYe0mMj+6Dr9AvsdMckLRbv6LTmy8jP8TD3Kt0kCyuD3WDMCsgdlWErrq5BtqpB0VCSdlU+Xkp2hD3eZYHk3tzV3G5vfdYidVCYkGzSbEqBdx10CrfKNSquqGtG9goS2QRbsqSSsZqSuDi3FeGYW3/mqtjXjaNvmcfgF8+xn7Qq2tzRUDDTRn+Y6xefQbBXxwyy8Z58mGH9q95j3F1Bg0ZE815SLsiZq93w5epXy7GuOcTxWZ0TD7LSnTKw+Yju79lwZnPkldLI9z3vN3Ocblx7lYXszN7rpw4Zj365c/wAjLLqdRmJB8wO/1U3Wm15YcrlsNeCtXPpY6bIDZTuEt0Ui7XFZQ641WurA2RDYyAm42VmtFzdYmSECx2WVrwegRWrfVTbYpa6sPREFuuhU/G6X7J8EQs077KVTN8lI2QXF1hcc02vJZQViYLlxPVELi/NWub2S42CE3CCRssbiVYaBVde1/oiYqTooCnkqFQssCeuiwRzNDi48ySrOdZjjztYKsdNZgzdFIsZ3SHKwW7rIGtaN7+qgWYLMafVZGMubu1KRXaW6DM61+S6OB3dj2HE7e1Raf/cLnmzTdx9BZb2COP8AH8N0Nvaov+8JfCevvJ3KIdyi4HqCIiAiIgIiICIiAiIgIiIgREQEREBERAREQEREEhZG6FYwsrd1MHghg8dPx/idQzKWiMPbbXK6Tceuh+a9LG+wtsV5/B3F+N4+5xLne2kXOpsGiy7o2Hos87bW3FJMem2x+oBcrueQVrfgcsrT5GqsXrO19kLrrGsjfdCtKrWMnXUWWJ5yi5Ngth/ulc6vJDDYkaJteOFxFxVTYPGM93vdfJG3d37DuvnWKcY4riOZgm9miP4ISQT6ndTxoSeIQCSQIWW7aleeXXxcWPzMq4Ofmy+rjOohxJcXG5J3J3KrdWKhb7cpuqltlcKrkgxSMDmrGy7TlcfQrYWKUbIlkaVkGqwt9wLK3ZNlTb5KVBVhsiAK4OiryVm80Qytdorh2iwhXbsiGS6X2UHZBsgtdWadVVW6IhYnyHZUaC0Cyu73Cg2RVUHRWF8t1j/ErjYokJB319FUEegVOZQKE6XO26wuNrrKdlhf7yJiAWl7WuOl7rM6SJvvv+C0JiQ8WP4SppgHbgH1UpsbPtIOkbC5Q6aYa5A31K2XAAaADRYwL2v1RXcYhLUyG12tHoungLLcQYaSXOd7VFuf74WrYdFv4H/6/h3/AO1F/wB4Skvb7ydyiHcouB6YiIgIiICIiAiIgIiIP//Z"
     alt="图片" width="200" height="150"/></div>
</p>


<div id="one">
    学号： <input type="text" name="s_no" value="<?php echo ($user->s_no); ?>" readonly>
    <br><br/>
    姓名： <input type="text" name="s_user" value="<?php echo ($user->s_user); ?>" readonly>
    <br><br/>
    民族： <input type="text" name="s_email" value="<?php echo ($user->s_nation); ?>" readonly>
    <br><br/>
    性别： <input type="text" name="s_email" value="<?php echo ($user->s_sex); ?>" readonly>
    <br><br/>
    专业： <input type="text" name="s_no" value="<?php echo ($user->s_major); ?>" readonly>
    <br><br/>
    班级： <input type="text" name="s_user" value="<?php echo ($user->s_class); ?>" readonly>
    <br><br/>
    邮箱： <input type="text" name="s_email" value="<?php echo ($user->s_email); ?>" readonly>
    <br><br/>
</div>

</body>
</html>