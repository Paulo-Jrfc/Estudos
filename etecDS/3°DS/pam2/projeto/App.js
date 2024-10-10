import React from 'react';
import { Text, StyleSheet, View, image, Dimensions, ScrollView, } from 'react-native';
import Carousel from 'react-native-snap-carousel'
import Banner from './components/Banner';

const SLIDER_WIDTH = Dimensions.get('window').width
const ITEM_WIDTH = SLIDER_WIDTH * 0.88

type Props = {
  item: {
    imgUrl: string
  }
  index: number
}

const carouselItems = [ 
  {
      imgUrl:
      'https://storage.googleapis.com/movida-public-images/modelos/3210_image.jpg'
  },
  {
      imgUrl:
      'https://storage.googleapis.com/movida-public-images/modelos/3210_image.jpg'
  },
  {
      imgUrl:
      'https://storage.googleapis.com/movida-public-images/modelos/3210_image.jpg'
  }

]


function carouselCardItem({item, index}: Props){
  return(
    <View style={estilo.cardCarousel} key={index}>
      <Image style={estilo.image} source={{ uri: item.imgUrl }} />
    </View>
  )
}

export default function App() {
  return (

    <ScrollView>
      <Banner
      imagem = 'https://images.pexels.com/photos/1421903/pexels-photo-1421903.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'  
      titulo = 'EXPLORE O MUNDO'>
    </Banner>
    <View style={estilo.container}>
    <Carousel 
      data={carouselItems}
      renderItem={carouselCardItem}
      sliderWidth={SLIDER_WIDTH}
      itemWidth={ITEM_WIDTH}
      useScrollView={true}
    />
    </View>
    </ScrollView>
  );
}



const estilo = StyleSheet.create({

  background: {
    backgroundColor:'#000000',
  },
  container:{
    flex: 1,
    backgroundColor:'gray',
    paddingTop: 30
  },
  cardCarousel:{
    width: ITEM_WIDTH,
  },
  image: {
    height:250,
    borderRadius: 8
  }
});