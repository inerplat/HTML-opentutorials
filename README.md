# Web Application - opentutorials
온라인 수업 내용을 기반으로한 정리입니다.
<ol>
<li>
<a href="#1">HTML 기본 문법</a>
</li>
<li>
<a href="#2">HTML 문법 - 속성</a>
</li>
</ol>


---
<section id="1">

## HTML 기본문법 <a href="#" style="font-size:20px;">#</a>

`<!DOCTYPE>` : 마크업 언어용 DTD 태그.

`<html>` : DTD태그를 제외한 전부를 둘러싼다.

`<head>` : html문서의 속성을 지정하기 위한 태그, 타이틀이나 메타태그(문서 자체를 설명하는 태그)를 이곳에 넣는다.

`<body>` : html 문서의 내용을 나타내기 위한 태그, 표시할 문서의 레이아웃을 이곳에 넣는다
</section>

---
<section id="2">

## HTML 문법 - 속성
`<a>` : 하이퍼 링크를 생성하는 태그. href속성과 함께 사용한다

</section>

### 예시

```
<a href = "http://github.com/inerplat"> github </a>
```
<a href = "http://github.com/inerplat"> github </a>

---

## HTML 문법 - 태그의 중첩

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

<p> </p>

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

## 모델링을 HTML로 만들기

`<h>` : 제목(heading)을 표시할때 사용된다.
> `<h1>`이 가장 크고 `<h6>`가 가장 작다.
> CSS를 사용하여 크기, 색상, 폰트를 변경할 수 있다.

---

## 의미론적인 웹(Semantic Web)

### XHTML->HTML5

### 네비게이션
```
	<h1>JavaScript</h1>
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
			<h2>변수와 상수</h2>
			변수란?
			<ul>
				<li>변하는 값</li>
				<li>x=10일때 왼쪽항...</li>
			</ul>
		</article>
```

`<header>`, `<nav>`, `<article>` : 실제 화면에서 변하는 것은 없음

---

## 사이트 완성
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

---

## CSS의 기본문법

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

---

## 박스 모델
<img src="http://inerplat.esy.es/github_img/boxmodel.gif">

---
