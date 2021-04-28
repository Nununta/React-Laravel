import React from 'react'
import Taskinput from './Taskinput'
import TaskList from './TaskList'

const TaskPage: React.VFC = () => {
/*
    const [tasks, setTasks] = useState<Task[]>([])
   
    const getTasks = async () => {
        const { data }  = await axios.get<Task[]>('api/tasks')
        // console.log(data);
        setTasks(data)
    }

    useEffect(() => {
        getTasks()
    },[])
*/


    return(
    <>
        <Taskinput />
        <TaskList />
    </>
    )
}

export default TaskPage

