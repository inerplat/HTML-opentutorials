# 관계형 데이터베이스 이론

## 단일테이블
>##topic
><html>
<table class="tg" id="table">
  <tr>
    <th class="tg-s6z2">id</th>
    <th class="tg-s6z2">title</th>
    <th class="tg-s6z2">author</th>
  </tr>
  <tr>
    <td class="tg-s6z2">1</td>
    <td class="tg-spn1">About JavaScript</td>
    <td class="tg-s6z2">1</td>
  </tr>
  <tr>
    <td class="tg-s6z2">2</td>
    <td class="tg-spn1">Variable and Constant</td>
    <td class="tg-s6z2">3</td>
  </tr>
  <tr>
    <td class="tg-s6z2">3</td>
    <td class="tg-spn1">Operator</td>
    <td class="tg-s6z2">1</td>
  </tr>
  <tr>
    <td class="tg-s6z2">4</td>
    <td class="tg-spn1">Conditional</td>
    <td class="tg-s6z2">2</td>
  </tr>
  <tr>
    <td class="tg-s6z2">5</td>
    <td class="tg-spn1">Function</td>
    <td class="tg-s6z2">2</td>
  </tr>
  <tr>
    <td class="tg-s6z2">6</td>
    <td class="tg-spn1">Object</td>
    <td class="tg-s6z2">3</td>
  </tr>
</table>
</html>
>##user
<html>
<table class="tg" id="ttable">
  <tr>
    <th class="tg-s6z2">id</th>
    <th class="tg-s6z2">name</th>
  </tr>
  <tr>
    <td class="tg-s6z2">1</td>
    <td class="tg-spn1">egoing</td>
  </tr>
  <tr>
    <td class="tg-s6z2">2</td>
    <td class="tg-spn1">jin</td>
  </tr>
  <tr>
    <td class="tg-s6z2">3</td>
    <td class="tg-spn1">k8805</td>
  </tr>
  <tr>
    <td class="tg-s6z2">4</td>
    <td class="tg-spn1">sorialgi</td>
  </tr>
  <tr>
    <td class="tg-s6z2">5</td>
    <td class="tg-spn1">lily</td>
  </tr>
  <tr>
    <td class="tg-s6z2">6</td>
    <td class="tg-spn1">happydeveloper</td>
  </tr>
</table>
</html>



topic테이블의 author과 user테이블의 id를 결합하여 관계형테이블로 만든다. 
```
SELECT title,name FROM topic LEFT JOIN user ON topic.author = user.id
```

## 관계형 테이블
>##topic+user
<table class="tg">
  <tr>
    <th class="tg-s6z2">title</th>
    <th class="tg-s6z2">name</th>
  </tr>
  <tr>
    <td class="tg-s6z2">About JavaScript</td>
    <td class="tg-spn1">egoing</td>
  </tr>
  <tr>
    <td class="tg-s6z2">Variable and Constant</td>
    <td class="tg-spn1">k8805</td>
  </tr>
  <tr>
    <td class="tg-s6z2">Operator</td>
    <td class="tg-spn1">egoing</td>
  </tr>
  <tr>
    <td class="tg-s6z2">Conditional</td>
    <td class="tg-spn1">jin</td>
  </tr>
  <tr>
    <td class="tg-s6z2">Function</td>
    <td class="tg-spn1">jin</td>
  </tr>
  <tr>
    <td class="tg-s6z2">Object</td>
    <td class="tg-spn1">k8805</td>
  </tr>
</table>

