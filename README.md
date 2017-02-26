# Web Application - opentutorials
온라인 수업 내용을 기반으로한 정리입니다.

<section id="0">
  <div style="border:1px solid gray;padding:20px;width:380px">
  <h2> 목차 </h2>
  <ul style="font-size:120%;list-style:none">
  <li>
  <a href="#1-1">1-1.</a> HTML 기본 문법
  </li>
  <li>
  <a href="#1-2">1-2.</a> HTML 문법 - 속성
  </li>
  <li>
  <a href="#1-3">1-3.</a> HTML 문법 - 태그의 중첩
  </li>
  <p></p>
  <li>
  <a href="#2-1">2-1.</a> 모델링을 HTML로 만들기
  </li>
  <li>
  <a href="#2-2">2-2.</a> 의미론적인 웹(Semantic Web)
  </li>
  <li>
  <a href="#2-3">2-3.</a> 사이트 완성
  </li>
  <p></p>
  <li>
  <a href="#3-1">3-1.</a> CSS의 기본문법
  </li>
  <li>
  <a href="#3-2">3-2.</a> 박스모델
  </li>
  <li>
  <a href="#3-2">3-3.</a> float
  </li>
  <p></p>
  <li>
  <a href="#3-2">4-1.</a> CSS 실습1
  </li>
  </ul>
</div>
</section>


---
<section id="1-1">

## <a href="#0">1-1.</a> HTML 기본문법

`<!DOCTYPE>` : 마크업 언어용 DTD 태그.

`<html>` : DTD태그를 제외한 전부를 둘러싼다.

`<head>` : html문서의 속성을 지정하기 위한 태그, 타이틀이나 메타태그(문서 자체를 설명하는 태그)를 이곳에 넣는다.

`<body>` : html 문서의 내용을 나타내기 위한 태그, 표시할 문서의 레이아웃을 이곳에 넣는다
</section>

---
<section id="1-2">

## <a href="#0">1-2.</a> HTML 문법 - 속성
`<a>` : 하이퍼 링크를 생성하는 태그. href속성과 함께 사용한다

</section>

### 예시

```
<a href = "http://github.com/inerplat"> github </a>
```
<a href = "http://github.com/inerplat"> github </a>

---

## <a href="#0">1-3.</a> HTML 문법 - 태그의 중첩

`<li>` : 목록 작성시 각 항목(list item)은 `<li>`와 `</li>`사이에 넣는다.

`<ol>` : 순서 있는 목록(ordered list)을 표시한다

`<ul>` : 순서 없는 목록(unordered list)을 표시한다.

### 예시
#### `<ol>`
```
<ol>
  <li>html</li>
  <li>css</li>
  <li>javascript</li>
</ol>

```
 <ol>
      <li>html</li>
      <li>css</li>
      <li>javascript</li>
</ol>

#### `<ul>`
```
<ul>
  <li>서울대학교</li>
  <li>고려대학교</li>
  <li>연세대학교</li>
</ul>

```
  <ul>
      <li>서울대학교</li>
      <li>고려대학교</li>
      <li>연세대학교</li>
  </ul>

---

<section id="2-1">

## <a href="#0">2-1.</a> 모델링을 HTML로 만들기

`<h>` : 제목(heading)을 표시할때 사용된다.
> `#`이 가장 크고 `<h6>`가 가장 작다.
> CSS를 사용하여 크기, 색상, 폰트를 변경할 수 있다.

</section>

---

<section id="2-2">

## <a href="#0">2-2.</a> 의미론적인 웹(Semantic Web)

### XHTML->HTML5

### 네비게이션
```
	#JavaScript</h1>
		<nav>
			<ol>
				<li>JavaScript란?</li>
				<li>변수와 상수</li>
				<li>연산자</li>
			</ol>
		</nav>
```

### 컨텐츠
```
		<article>
			##변수와 상수</h2>
			변수란?
			<ul>
				<li>변하는 값</li>
				<li>x=10일때 왼쪽항...</li>
			</ul>
		</article>
```

`<header>`, `<nav>`, `<article>` : 실제 화면에서 변하는 것은 없음

</section>

---

<section id="2-3">

## <a href="#0">2-3.</a> 사이트 완성
<img src='http://inerplat.esy.es/github_img/webapp_1.png' width=60% height=60% alt='사이트 구조'>

### 쉬어가기
#### 웹브라우저 (Client Side Tech)
<ul>
<li>HTML</li>
<li>CSS</li>
<li>Javascript</li>
</ul>


#### 웹서버(Server Side Tech)
<ul>
<li>PHP</li>
<li>MySQL</li>
</ul>

</section>

---

<section id="3-1">

## <a href="#0">3-1.</a> CSS의 기본문법

#### CSS : Cascading Style Sheet
`<style>` : HTML+CSS 서로 공존 가능하게 해줌


#### 예시
```
h1
{
    color : red
}
```
`h1` : 선택자(selector)

`{color : red}` : 서술(description)

</section>

---

<section id="3-2">

## <a href="#0">3-2.</a> 박스 모델
<img src="http://inerplat.esy.es/github_img/boxmodel.gif">

</section>

---

<section id="3-3">

## <a href="#0"> 3-3.</a> float

`<img src = "주소" />` : 이미지 삽입 태그

<img style="float:left;margin-right:5em" src="https://github.com/inerplat/WEB_Application-opentutorials/tree/master/03-3.%20float/float.png">

컨텐츠가 나란히 배치되도록 함

</section>

---

<section id="4-1">

## <a href="#0">4-1.</a> CSS 실습1

<img src="http://inerplat.esy.es/github_img/CSSbox.png" height=90% width=90%>

</section>

<section id="4-2">

## <a href="#0">
