import {Text, View, TouchableOpacity, TextInput} from 'react-native'
import estilo from './style';

export default function SearchBar(){
    return(
    <>
    <View style={estilo.asembler}>
        <View style={estilo.Main}>
                <TextInput placeholder='Pesquise pelo seu destino' style={estilo.Input}></TextInput>
        </View>
        <View style={estilo.buttonP}>
            <TouchableOpacity>

            </TouchableOpacity>
        </View>
    </View>
    </>
)}
