import axios from 'axios'
import {useQuery} from 'react-query'
import { Task } from '../pages/types/Task'

const getTasks = async() => {
    const { data } = await axios.get<Task[]>('api/tasks')
    return data
}

export {
    getTasks
}