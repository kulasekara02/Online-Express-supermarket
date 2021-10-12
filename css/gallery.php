.container1 {
  display: flex;
  width: 100%;
  padding: 1% 0%;
  box-sizing: border-box;
  height: 300px;
}

.box1 {
  flex: 1;
  overflow: hidden;
  transition: 0.5s;
  margin: 0 11px;
  box-shadow: 0 20px 30px rgba(0,1,1,.1);
  line-height: 0;
}

.box1 > img {
  width: 100%;
  height: calc(100% - 5vh);
  object-fit: cover; 
  transition: .5s;
}

.box1 > span {
  font-size: 2.2vh;
  display: block;
  text-align: center;
  height: 1vh;
  line-height: 1.0;
}

.box1:hover { flex: 1 1 20%; }
.box1:hover > img {
  width: 100%;
  height: 100%;
}
 
 